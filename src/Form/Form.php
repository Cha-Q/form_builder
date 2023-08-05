<?php 

    namespace App\Form;

    class Form{

        /**
         * 
         * @var $fieldName string Form element's name
         */
        private $fieldName;



        
        public function setField(string $fieldName)
        {
            $this->fieldName = $fieldName;
        }

        /**
         * 
         * Generate a new label
         */
        public function label():string
        {
            return "<label  for='{$this->fieldName}'>Entrez votre {$this->fieldName}</label><br>";
        }

        /**
         * @var $field string Value of the new input
         * @return string
         */

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

        /**
         * @var $field string Value of the new textarea
         * @return string
         */

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

        /**
         * Generate a submit button
         * @return string
         */

        public function submit()
        {
            return "<button class='btn btn-primary' type='submit'> Validez</button>";
        }

        
    }