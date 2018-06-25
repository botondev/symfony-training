<?php

namespace JobZBundle\Form;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityManager;

class JobType extends AbstractType
{

    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $jobChoices = $this->entityManager->getRepository('JobZBundle:JobType')->findAll();

        $builder->add('url')->add('position')->add('location')
            ->add('description')->add('howToApply')->add('created')
            ->add('company')->add('jobType', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',
                array('choices' => $jobChoices, 'expanded' => true,
                    'choices_as_values' => true,
                    'choice_label' => function($jobType, $key, $value) {
                        /** @var Category $category */
                        return $jobType->getName();
                    }))
            ->add('category')->add('user');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'JobZBundle\Entity\Job'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'jobzbundle_job';
    }
}
