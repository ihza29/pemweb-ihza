<?php

class FormController
{
    private $formmodel;
    private $Form;
    private $isiForm;

    public function getForm()
    {
        $this->Form = new FormView();
        $this->Form->tampilForm();
    }

    public function getFormIsi()
    {
        $this->formmodel = new FormModel();
        $isi = $this->formmodel->mengisi();
        $acak = $this->formmodel->random();
        $this->isiForm = new FormView();
        $this->isiForm->tampilisi($isi, $acak);
    }
}