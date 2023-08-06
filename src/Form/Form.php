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
            $html = ucfirst($this->fieldName);
            return "<label  for='{$this->fieldName}'>$html</label>";
        }

        /**
         * @param $field string Name of the new input
         * @param $type string Value of the input's type
         * @param $value string Value of the new input
         * @return string
         */

        public function input(string $field, string $type, string $value = null):string
        {
            $this->setField($field);
            $className = 'form-control';
            $formClass = 'my-3';
            if($type === 'radio'){
                $className = 'form-check-input'; 
                $formClass = '';
                return "
                    <div class='form-group $formClass'>
                        {$this->label()}
                        <input class=$className type='$type' id='field{$this->fieldName}' name='$value' placeholder='{$this->fieldName}' value={$this->fieldName}>
                    </div>";
            }
            return "
                <div class='form-group $formClass'>
                    {$this->label()}
                    <input class=$className type='$type' id='{$this->fieldName}' name='field{$this->fieldName}' placeholder='Entrez votre {$this->fieldName}' value=$value>
                </div>";
        }

        /**
         * @var $field string Name of the new textarea
         * @param $type string Value of the input's textarea
         * @param $value string Value of the new textarea
         * @return string
         */

        public function textarea(string $field, string $value = null):string
        {
            $this->setField($field);
            return "
            <div class='form-group my-3'>
                {$this->label()}
                <textarea class='form-control' name='field{$this->fieldName}' col='12' row='30' placeholder='Entrez votre {$this->fieldName}'>$value</textarea>
            </div>";
            
        }

        /**
         * Generate a select element with options
         * @param $field string Name of the select's field
         * @param $options array Names of the options fields and value
         * @return string
         */

        public function select(string $field, array $options = [])
        {
            $this->setField($field);
            return "
            <div class='form-group my-3'>
                {$this->label()}
                <select name='$field' class='form-select'>
                    {$this->option($options)}
                </select>
            </div>";

        }

        /**
         * Generate a select element with options
         * @param $options array Names of the options fields and values
         * @return string
         */

        private function option(array $options = [])
        {
            $optionHtml = [];
            foreach($options as $option){
                $optionHtml[] = "<option value='$option'>$option</option>";
            }
        
            return implode("<br>",$optionHtml);
        }

        /**
         * 
         * @return string
         */

        public function radio(array $radios, string $field)
        {
            $radioHtml = [];
            $arrayVal = [];
            foreach($radios as $k => $radio){
                $radioHtml[] = 
                    "<div class='form-check'>
                        {$this->input($radio, 'radio', $field)}
                    
                    
                    </div>";
            }
            return implode("<br>",$radioHtml);;
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