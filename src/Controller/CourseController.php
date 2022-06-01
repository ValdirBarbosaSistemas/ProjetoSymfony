<?php

namespace App\Controller;

use App\Entity\Course;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/course', name: 'app_course')]
class CourseController extends AbstractController
{
    #[Route('/', name: 'index')] //Rota do método INDEX
    public function index(ManagerRegistry $doctrine): JsonResponse //Tipo de resposta em JSON
    {
        $entityManager = $doctrine->getManager();
        $course = $entityManager->getRepository(Course::class)->findAll();
        return $this->json([
           'data' => $course
        ]);
        /*return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/CourseController.php',
        ]);*/
    }
}
