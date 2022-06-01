<?php

namespace ContainerTJyvtiZ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8fc46 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere292b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesba06f = [
        
    ];

    public function getConnection()
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'getConnection', array(), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'getMetadataFactory', array(), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'getExpressionBuilder', array(), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'beginTransaction', array(), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'getCache', array(), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->getCache();
    }

    public function transactional($func)
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'transactional', array('func' => $func), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'wrapInTransaction', array('func' => $func), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'commit', array(), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->commit();
    }

    public function rollback()
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'rollback', array(), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'getClassMetadata', array('className' => $className), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'createQuery', array('dql' => $dql), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'createNamedQuery', array('name' => $name), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'createQueryBuilder', array(), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'flush', array('entity' => $entity), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'clear', array('entityName' => $entityName), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->clear($entityName);
    }

    public function close()
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'close', array(), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->close();
    }

    public function persist($entity)
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'persist', array('entity' => $entity), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'remove', array('entity' => $entity), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'refresh', array('entity' => $entity), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'detach', array('entity' => $entity), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'merge', array('entity' => $entity), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'getRepository', array('entityName' => $entityName), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'contains', array('entity' => $entity), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'getEventManager', array(), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'getConfiguration', array(), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'isOpen', array(), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'getUnitOfWork', array(), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'getProxyFactory', array(), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'initializeObject', array('obj' => $obj), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'getFilters', array(), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'isFiltersStateClean', array(), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'hasFilters', array(), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return $this->valueHolder8fc46->hasFilters();
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

        $instance->initializere292b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8fc46) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8fc46 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8fc46->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, '__get', ['name' => $name], $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        if (isset(self::$publicPropertiesba06f[$name])) {
            return $this->valueHolder8fc46->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8fc46;

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

        $targetObject = $this->valueHolder8fc46;
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
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8fc46;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8fc46;
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
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, '__isset', array('name' => $name), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8fc46;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8fc46;
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
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, '__unset', array('name' => $name), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8fc46;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8fc46;
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
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, '__clone', array(), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        $this->valueHolder8fc46 = clone $this->valueHolder8fc46;
    }

    public function __sleep()
    {
        $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, '__sleep', array(), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;

        return array('valueHolder8fc46');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere292b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere292b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere292b && ($this->initializere292b->__invoke($valueHolder8fc46, $this, 'initializeProxy', array(), $this->initializere292b) || 1) && $this->valueHolder8fc46 = $valueHolder8fc46;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8fc46;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8fc46;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
