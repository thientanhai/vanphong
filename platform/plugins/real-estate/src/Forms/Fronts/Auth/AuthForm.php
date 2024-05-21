<?php

namespace Botble\RealEstate\Forms\Fronts\Auth;

use Botble\Base\Forms\Fields\HtmlField;
use Botble\Base\Forms\FormAbstract;
use Botble\Theme\Facades\Theme;

abstract class AuthForm extends FormAbstract
{
    public function setup(): void
    {
        Theme::asset()->add('auth-css', 'vendor/core/plugins/real-estate/css/front-auth.css');

        $this
            ->contentOnly()
            ->template('plugins/real-estate::forms.auth');
    }

    public function submitButton(string $label): static
    {
        return $this
            ->add('openButtonWrap', HtmlField::class, [
                'html' => '<div class="d-grid">',
            ])
            ->add('submit', 'submit', [
                'label' => $label,
                'attr' => [
                    'class' => 'btn btn-primary btn-auth-submit',
                ],
            ])
            ->add('closeButtonWrap', HtmlField::class, [
                'html' => '</div>',
            ]);
    }

    public function banner(string $banner): static
    {
        return $this->setFormOption('banner', $banner);
    }

    public function icon(string $icon): static
    {
        return $this->setFormOption('icon', $icon);
    }

    public function heading(string $heading): static
    {
        return $this->setFormOption('heading', $heading);
    }

    public function description(string $description): static
    {
        return $this->setFormOption('description', $description);
    }
}
