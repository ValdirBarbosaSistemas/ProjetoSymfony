<?php

namespace ContainerRlCc0aF;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd107e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera8cd1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2e1c7 = [
        
    ];

    public function getConnection()
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'getConnection', array(), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'getMetadataFactory', array(), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'getExpressionBuilder', array(), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'beginTransaction', array(), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'getCache', array(), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->getCache();
    }

    public function transactional($func)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'transactional', array('func' => $func), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'wrapInTransaction', array('func' => $func), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'commit', array(), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->commit();
    }

    public function rollback()
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'rollback', array(), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'getClassMetadata', array('className' => $className), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'createQuery', array('dql' => $dql), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'createNamedQuery', array('name' => $name), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'createQueryBuilder', array(), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'flush', array('entity' => $entity), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'clear', array('entityName' => $entityName), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->clear($entityName);
    }

    public function close()
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'close', array(), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->close();
    }

    public function persist($entity)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'persist', array('entity' => $entity), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'remove', array('entity' => $entity), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'refresh', array('entity' => $entity), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'detach', array('entity' => $entity), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'merge', array('entity' => $entity), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'getRepository', array('entityName' => $entityName), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'contains', array('entity' => $entity), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'getEventManager', array(), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'getConfiguration', array(), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'isOpen', array(), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'getUnitOfWork', array(), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'getProxyFactory', array(), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'initializeObject', array('obj' => $obj), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'getFilters', array(), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'isFiltersStateClean', array(), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'hasFilters', array(), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return $this->valueHolderd107e->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializera8cd1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd107e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd107e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd107e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, '__get', ['name' => $name], $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        if (isset(self::$publicProperties2e1c7[$name])) {
            return $this->valueHolderd107e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd107e;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd107e;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd107e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd107e;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, '__isset', array('name' => $name), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd107e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd107e;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, '__unset', array('name' => $name), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd107e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd107e;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, '__clone', array(), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        $this->valueHolderd107e = clone $this->valueHolderd107e;
    }

    public function __sleep()
    {
        $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, '__sleep', array(), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;

        return array('valueHolderd107e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera8cd1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera8cd1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera8cd1 && ($this->initializera8cd1->__invoke($valueHolderd107e, $this, 'initializeProxy', array(), $this->initializera8cd1) || 1) && $this->valueHolderd107e = $valueHolderd107e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd107e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd107e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
