<?php

namespace App\Controller;

use App\Entity\Course;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use DateTime;
use DateTimeZone;

#[Route('/course', name: 'app_course')]
class CourseController extends AbstractController
{
    #[Route('/', name: 'index')] //Rota do método INDEX (nome da rota e "alias")
    public function index(ManagerRegistry $doctrine): JsonResponse //Tipo de resposta em JSON
    {
        /**
         * Como podem ver no código acima, para usar o doctrine é necessário
         * chamar a classe "ManagerEntity".
         */
        $entityManager = $doctrine->getManager(); //Atribuindo à variável entityManager a variável doctrine declarada no parâmetro
        $course = $entityManager->getRepository(Course::class)->findAll();//Chamando o findAll pelo repository

        return $this->json([ //Retorno no Json
            'data' => $course
        ]);
        /*return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/CourseController.php',
        ]);*/
    }

    /**
     * TODO CONTROLLER NECESSITA DE UMA ROTA E DO TIPO DE RETORNO "RESPONSE",
     * ou seja, sem o tipo de retorno ELE NÃO FUNCIONA.
     */

    #[Route("/new", name: "new_course", methods: ["POST"])]
    public function create(Request $request, ManagerRegistry $doctrine)
    {
        /**
         * Como vemos no código acima, quando se trabalha com o POST, é OBRIGATÓRIO
         * Chamar pelo parâmetro do método o "REQUEST" para que possa ser enviado
         * os dados para o cliente.
         *
         */

        $data = $request->request->all(); //Pegando TODAS AS INFORMAÇÕES que vem da requisição

        $entityManager = $doctrine->getManager();

        $course = new Course(); //Chamando a classe para que seja setada as informações
        $course->setName($data['name']);
        $course->setDescription($data['description']);
        $course->setSlug($data['slug']);
        $course->setCreatedAt(new DateTime('now', new DateTimeZone('Joao Pessoa/Paraiba')));
        $course->setUpdatedAt(new DateTime('now', new DateTimeZone('Joao Pessoa/Paraiba')));

        $entityManager->persist($course); //Persistindo as informações no banco
        $entityManager->flush(); //Enviando as informações

        return $this->json([
            'data' => 'Curso criado com sucesso!'
        ]);
    }

    #[Route("/{courseId}", name: "course_", methods: ["GET"])]
    public function read($courseId, ManagerRegistry $doctrine)
    {
        $entityManager = $doctrine->getManager();
        $entityManager->getRepository(Course::class)->find($courseId);
        $entityManager->flush();
    }

    #[Route("/{courseId}", name: "update_Course", methods: ["PUT", "PATCH"])]
    public function update($courseId, Request $request, ManagerRegistry $doctrine)
    {
        $data = $request->request->all();
        $course = $doctrine->getManager()->getRepository(Course::class)->find($courseId); //Usando o doctrine sem declarar em uma variável

        $course->setName($data['name']);
        $course->setDescription($data['description']);
        $course->setSlug($data['slug']);
        $course->setUpdatedAt(new \DateTime('now', new \DateTimeZone('Joao Pessoa/Paraiba')));

        $doctrine->getManager()->flush();
    }

    #[Route("/{courseId}", name: "delete_course", methods: ["DELETE"])]
    public function delete($courseId, ManagerRegistry $doctrine)
    {
        $entityManger = $doctrine->getManager();

        $course = $entityManger->getRepository(Course::class)->find($courseId);

        $entityManger->remove($course);
        $entityManger->flush();

        return $this->json([
            'data' => 'Curso removido com sucesso!'
        ]);
    }
}
