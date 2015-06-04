<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;

class SiteAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('enabled')
            ->add('name')
            ->add('host')
            ->add('title')
//            ->add('metaKeywords')
//            ->add('metaDescription')
//            ->add('isBackImg')
//            ->add('isBackSlideShow')
//            ->add('googleFont')
//            ->add('created_at')
//            ->add('fixMainMenu')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('enabled')
            ->add('name')
            ->add('host')
            ->add('title')
//            ->add('metaKeywords')
//            ->add('metaDescription')
//            ->add('isBackImg')
//            ->add('isBackSlideShow')
//            ->add('googleFont')
//            ->add('created_at')
//            ->add('fixMainMenu')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
//            ->add('id')
            ->with('General')     
                ->add('enabled')
                ->add('name')
                ->add('host')
                ->add('title')
                ->add('created_at')
            ->end()    
            ->with('SEO')    
                ->add('metaKeywords')
                ->add('metaDescription')
            ->end()    
            ->with('Content')    
                ->add('isBackImg', null, array('required' => false))
                ->add('isBackSlideShow', null, array('required' => false))
                ->add('googleFont')
                ->add('fixMainMenu', null, array('required' => false))
            ->end()
            ->with('Pages')
                ->add('pages', 'sonata_type_model', array('expanded' => true, 'multiple' => true))
            ->end()    
                
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('enabled')
            ->add('name')
            ->add('host')
            ->add('title')
            ->add('metaKeywords')
            ->add('metaDescription')
            ->add('isBackImg')
            ->add('isBackSlideShow')
            ->add('googleFont')
            ->add('created_at')
            ->add('fixMainMenu')
        ;
    }
}
