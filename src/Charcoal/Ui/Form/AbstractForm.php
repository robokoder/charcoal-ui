<?php

namespace Charcoal\Ui\Form;

// Intra-module (`charcoal-ui`) dependencies
use \Charcoal\Ui\AbstractUiItem;
use \Charcoal\Ui\Form\FormInterface;
use \Charcoal\Ui\Layout\LayoutAwareInterface;
use \Charcoal\Ui\Layout\LayoutAwareTrait;
use \Charcoal\Ui\UiItemInterface;

/**
 * A Basic Form
 *
 * Abstract implementation of {@see \Charcoal\Ui\Form\FormInterface}.
 */
abstract class AbstractForm extends AbstractUiItem implements
    FormInterface,
    LayoutAwareInterface,
    UiItemInterface
{
    use LayoutAwareTrait;
    use FormTrait;

    /**
     * Returns a new form.
     *
     * @param array|\ArrayAccess $data The class dependencies.
     */
    public function __construct($data = null)
    {
        /** Satisfies {@see \Charcoal\Ui\Form\FormTrait} */
        $this->setFormGroupFactory($data['form_group_factory']);

        /** Satisfies {@see \Charcoal\Ui\Layout\LayoutAwareInterface} */
        $this->setLayoutBuilder($data['layout_builder']);
    }
}
