<?php 
class Utils {
    public function __construct()
    {
        $this->user = new User();
    }
    /**
     * @param $filename string
     * @return string
     */
    public function searchHtml($filename): string
    {
        return file_get_contents('./html/'. $filename . '.html');
    }
    
    /**
     * @param $filename string
     * @return string
     */
    public function searchInc($filename) :string
    {
        return file_get_contents('./html/inc/'. $filename . '.html');
    }
    
    /**
     * @param $script string
     * @return string
     */
    public function searchScript($script) :string
    {
        return file_get_contents('./public/js/'. $script . '.js');
    }
    
    /**
     * @param  $header string
     * @param  $title string
     * @return string
     */
    public function setTitle($header, $title) :string
    {
        return str_replace("{title}","${title}",$header);
    }
    
    /**
     * @param  $header string
     * @param  $description string
     * @return string
     */
    public function setDescription($header, $description) : string
    {
        return str_replace("{description}", "${description}" , $header);
    }
    
    /**
     * @param  $html string
     * @param  $pageDown int
     * @param  $currentPage int
     * @param  $pageUp int
     * @return string
     */
    public function setLink($html, $pageDown, $currentPage, $pageUp) :string
    {
        $html = str_replace("{%pageDown%}", $pageDown , $html);
        $html = str_replace("{%currentPage%}", $currentPage , $html);
        return str_replace("{%pageUp%}", $pageUp , $html);
    }
    
    /**
     * @param  $html string
     * @param  $name string
     * @param  $firstName string
     * @param  $email string
     * @param  $createdAt datetime
     * @param  $updatedAt datetime
     * @return string
     */
    public function setUserContent($html, $name, $firstName, $email, $createdAt, $updatedAt, $role) :string
    {
       
        $html = str_replace("{%name%}", $name, $html);
        $html = str_replace("{%firstName%}", $firstName, $html);
        $html = str_replace("{%email%}", $email, $html);
        $html = str_replace("{%updatedAt%}", $updatedAt, $html);
        $html = str_replace("{%role%}", $role, $html);
        return str_replace("{%createdAt%}", $createdAt, $html);
    }
    /**
     * @return bool
     */
     public function validateAdmin() :bool
     {
         $role = false;
         
         if(isset ($_SESSION['user'])) 
         {
             $data = unserialize($_SESSION['user']);
             if($data->role === 'admin'){
                return $role = true;
            } 
         } 
        return $role;
     }
     
     /**
     * @return string
     */
     public function addCsrf($html){
        $_SESSION['csrf'] = bin2hex(random_bytes(15));
        $html = str_replace ("{%csrf%}", $_SESSION['csrf'], $html);
        return $html;
    }
   
     public function type($type){
         
         switch($type){
             case 'location':
                 $selecteda = ['selected', ''];
                 return $selecteda;
                 break;
             case 'achat':
                 $selecteda = ['', 'selected'];
                 return $selecteda;
                 break;
            default:
                $selecteda = ['selected', ''];
                return $selecteda;
                break;
         }
     }
   
     public function pieces($pieces){
         
         switch($pieces){
            case 'T1':
                $selectedb = ['selected', '', '', '', '', '', ''];
                 return $selectedb;
                 break;
            case 'T1 bis':
                $selectedb = ['', 'selected', '', '', '', '', ''];
                 return $selectedb;
                 break;
            case 'T2':
                 $selectedb = ['', '', 'selected', '', '', '', ''];
                 return $selectedb;
                 break;
            case 'T3':
                $selectedb = ['', '', '', 'selected', '', '', ''];
                return $selectedb;
                 break;
            case 'T4':
                $selectedb = ['', '', '', '', 'selected', '', ''];
                return $selectedb;
                 break;
            case 'T5':
                $selectedb = ['', '', '', '', '', 'selected', ''];
                return $selectedb;
                 break;
            case 'T5+':
                $selectedb = ['', '', '', '', '', '', 'selected'];
                return $selectedb;
                 break;
            default:
                $selectedb = ['selected', '', '', '', '', '', ''];
                return $selected;
                break;
         }
     }
     
     public function garage($garage){
         
         switch($garage){
            case 'oui':
                 $selectedc = ['selected', ''];
                 return $selectedc;
                 break;
             case 'non':
                 $selectedc = ['', 'selected'];
                 return $selectedc;
                 break;
            default:
                 $selectedc = ['selected', ''];
                 return $selectedc;
                break;
         }
     }
     
     public function SdB($SdB){
         
         switch($SdB){
            case '1':
                 $selectedd = ['selected', '', ''];
                 return $selectedd;
                 break;
            case '2':
                 $selectedd = ['', 'selected', ''];
                 return $selectedd;
                 break;
            case '2+':
                 $selectedd = ['', '', 'selected'];
                 return $selectedd;
                 break;
            default:
                 $selectedd = ['selected', '', ''];
                 return $selectedd;
                break;
         }
     }
}