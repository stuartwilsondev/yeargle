<?php
/**
 * Created by PhpStorm.
 * User: stuartwilson
 * Date: 14/06/2014
 * Time: 21:27
 */

namespace Yeargle\Bundle\CoreBundle\Resources\form\type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;


class MainSearch extends AbstractType
{

    protected $formName = 'Yeagle_Search';
    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return $this->formName;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//type="text" id="search-query" name="searchquery" autocomplete="off" placeholder="Search Within The Last Year"
        $builder
            ->add('search_element_text', 'text', array(
                'attr' => array(
                    'id'=>'search-query',
                    'name' => 'searchquery',
                    'autocomplete' => 'off',
                    'placeholder' => 'Search Within The Last Year'
                ),
                'constraints' => array(
                    new NotBlank(),
                    new Length(array('min' => 3)),
                )
            ));
         /*   ->add('search_element_search', 'submit', array(
                'attr' => array('class'=> 'button'),
            ))
            ->add('search_element_random', 'submit', array(
                'attr' => array('class'=> 'button'),
            ));*/

                // <input type="button" class="button" value="Search"/>
                        //<input type="button" class="button" value="Show Me Something Random"/>
    }

}