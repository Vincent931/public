<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('content')
            ->add('created_at')
            ->add('categorie_id')
        ;
        /*->add('name', TextType::class, [
                    'attr' => array(
                        'id' => 'name',
                        'title' => 'title',
                        'content' => 'content',
                        'class' =>'class css'
                    ),
                    'label' => 'Nom de ma categorie',
                    'label_attr' => array(
                        'for' => 'name',
                        'class' => 'class css'
                    )])
        ;*/
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
