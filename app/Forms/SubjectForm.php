<?php

namespace SON\Forms;

use Kris\LaravelFormBuilder\Form;

class SubjectForm extends Form
{
    public function buildForm()
    {
        // Add fields here...
        $this
            ->add('name', 'text', [
                'label' => 'Nome',
                'rules' => 'required|max:255'
            ]);
    }
}
