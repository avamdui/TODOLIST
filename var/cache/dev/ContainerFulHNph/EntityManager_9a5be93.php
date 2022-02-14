<?php

namespace ContainerFulHNph;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldereee69 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3df8a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties87b50 = [
        
    ];

    public function getConnection()
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'getConnection', array(), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'getMetadataFactory', array(), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'getExpressionBuilder', array(), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'beginTransaction', array(), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'getCache', array(), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'transactional', array('func' => $func), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'commit', array(), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->commit();
    }

    public function rollback()
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'rollback', array(), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'getClassMetadata', array('className' => $className), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'createQuery', array('dql' => $dql), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'createNamedQuery', array('name' => $name), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'createQueryBuilder', array(), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'flush', array('entity' => $entity), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'clear', array('entityName' => $entityName), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->clear($entityName);
    }

    public function close()
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'close', array(), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->close();
    }

    public function persist($entity)
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'persist', array('entity' => $entity), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'remove', array('entity' => $entity), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'refresh', array('entity' => $entity), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'detach', array('entity' => $entity), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'merge', array('entity' => $entity), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'contains', array('entity' => $entity), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'getEventManager', array(), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'getConfiguration', array(), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'isOpen', array(), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'getUnitOfWork', array(), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'getProxyFactory', array(), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'initializeObject', array('obj' => $obj), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'getFilters', array(), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'isFiltersStateClean', array(), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'hasFilters', array(), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return $this->valueHoldereee69->hasFilters();
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

        $instance->initializer3df8a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldereee69) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldereee69 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldereee69->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, '__get', ['name' => $name], $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        if (isset(self::$publicProperties87b50[$name])) {
            return $this->valueHoldereee69->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereee69;

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

        $targetObject = $this->valueHoldereee69;
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
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereee69;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldereee69;
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
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, '__isset', array('name' => $name), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereee69;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldereee69;
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
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, '__unset', array('name' => $name), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereee69;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldereee69;
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
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, '__clone', array(), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        $this->valueHoldereee69 = clone $this->valueHoldereee69;
    }

    public function __sleep()
    {
        $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, '__sleep', array(), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;

        return array('valueHoldereee69');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3df8a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3df8a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3df8a && ($this->initializer3df8a->__invoke($valueHoldereee69, $this, 'initializeProxy', array(), $this->initializer3df8a) || 1) && $this->valueHoldereee69 = $valueHoldereee69;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldereee69;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldereee69;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
