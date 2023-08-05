<?php 

    namespace App\Form;

    class Form{

        private $fieldName;



        public function setField(string $fieldName)
        {
            $this->fieldName = $fieldName;
        }

        public function label():string
        {
            return "<label  for='{$this->fieldName}'>Entrez votre {$this->fieldName}</label><br>";
        }

        public function input(string $field):string
        {
            $this->setField($field);
            $label = $this->label();
            return "
            <div class='form-group my-3'>
                $label
                <input class='form-control' type='text' id='{$this->fieldName}' name='field{$this->fieldName}' placeholder='{$this->fieldName}' >
            </div>";
            
        }

        public function textArea(string $field):string
        {
            $this->setField($field);
            $label = $this->label();
            return "
            <div class='form-group my-3'>
                $label
                <textarea class='form-control' type='text' name='field{$this->fieldName}' col='12' row='30' placeholder='{$this->fieldName}'></textarea>
            </div>";
            
        }

        public function submit()
        {
            return "<button class='btn btn-primary' type='submit'> Validez</button>";
        }
    }