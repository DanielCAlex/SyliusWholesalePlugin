<?php
/*
 * This file was created by a developer at SkyBound Tech.
 * @author Daniel Alexandre <daniel.alexandre@skyboundtech.co>
 *
 * (c) SkyBound Tech
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SkyBoundTech\SyliusWholesalePlugin\Form;

use Sylius\Bundle\ChannelBundle\Form\Type\ChannelChoiceType;
use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Sylius\Bundle\ResourceBundle\Form\Type\ResourceTranslationsType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class RulesetType extends AbstractResourceType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code', TextType::class, [
                'required' => true
            ])
            ->add('translations', ResourceTranslationsType::class, [
                'entry_type' => RulesetTranslationType::class,
            ])
            ->add('enabled', CheckboxType::class)
            ->add('channels', ChannelChoiceType::class, [
                'multiple' => true,
                'expanded' => true,
            ])
        ;
    }


    public function getBlockPrefix()
    {
        return "skyboundtech_sylius_wholesale_plugin_ruleset";
    }

}
