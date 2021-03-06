<?php

namespace Bakgat\Notos\__CG__\Bakgat\Notos\Domain\Model\Identity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Group extends \Bakgat\Notos\Domain\Model\Identity\Group implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Bakgat\\Notos\\Domain\\Model\\Identity\\Group' . "\0" . 'description', '' . "\0" . 'Bakgat\\Notos\\Domain\\Model\\Identity\\Group' . "\0" . 'avatar', '' . "\0" . 'Bakgat\\Notos\\Domain\\Model\\Identity\\Group' . "\0" . 'parent', '' . "\0" . 'Bakgat\\Notos\\Domain\\Model\\Identity\\Group' . "\0" . 'children', 'id', 'firstName', 'lastName', 'kind', 'references', 'relatedTo'];
        }

        return ['__isInitialized__', '' . "\0" . 'Bakgat\\Notos\\Domain\\Model\\Identity\\Group' . "\0" . 'description', '' . "\0" . 'Bakgat\\Notos\\Domain\\Model\\Identity\\Group' . "\0" . 'avatar', '' . "\0" . 'Bakgat\\Notos\\Domain\\Model\\Identity\\Group' . "\0" . 'parent', '' . "\0" . 'Bakgat\\Notos\\Domain\\Model\\Identity\\Group' . "\0" . 'children', 'id', 'firstName', 'lastName', 'kind', 'references', 'relatedTo'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Group $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setName(\Bakgat\Notos\Domain\Model\Identity\Name $name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function name()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'name', []);

        return parent::name();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function description()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'description', []);

        return parent::description();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvatar($avatar)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvatar', [$avatar]);

        return parent::setAvatar($avatar);
    }

    /**
     * {@inheritDoc}
     */
    public function avatar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'avatar', []);

        return parent::avatar();
    }

    /**
     * {@inheritDoc}
     */
    public function setParent(\Bakgat\Notos\Domain\Model\Identity\Group $parent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', [$parent]);

        return parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function parent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'parent', []);

        return parent::parent();
    }

    /**
     * {@inheritDoc}
     */
    public function children()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'children', []);

        return parent::children();
    }

    /**
     * {@inheritDoc}
     */
    public function addChild(\Bakgat\Notos\Domain\Model\Identity\Group $child)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addChild', [$child]);

        return parent::addChild($child);
    }

    /**
     * {@inheritDoc}
     */
    public function removeChild(\Bakgat\Notos\Domain\Model\Identity\Group $child)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeChild', [$child]);

        return parent::removeChild($child);
    }

    /**
     * {@inheritDoc}
     */
    public function clearChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'clearChildren', []);

        return parent::clearChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function id()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'id', []);

        return parent::id();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName(\Bakgat\Notos\Domain\Model\Identity\Name $firstName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function firstName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'firstName', []);

        return parent::firstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName(\Bakgat\Notos\Domain\Model\Identity\Name $lastName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function lastName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'lastName', []);

        return parent::lastName();
    }

    /**
     * {@inheritDoc}
     */
    public function fullName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'fullName', []);

        return parent::fullName();
    }

    /**
     * {@inheritDoc}
     */
    public function setKind(\Bakgat\Notos\Domain\Model\Kind $kind)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKind', [$kind]);

        return parent::setKind($kind);
    }

    /**
     * {@inheritDoc}
     */
    public function kind()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'kind', []);

        return parent::kind();
    }

    /**
     * {@inheritDoc}
     */
    public function references()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'references', []);

        return parent::references();
    }

    /**
     * {@inheritDoc}
     */
    public function relatedTo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'relatedTo', []);

        return parent::relatedTo();
    }

}
