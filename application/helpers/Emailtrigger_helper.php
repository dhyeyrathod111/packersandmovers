<?php
/**
 * @author Dhyey Rathod
 */
class Emailtrigger
{
    private $_url =  FALSE;

    private $_user = FALSE;

    private $_password = FALSE;

    private $_from = FALSE ;

    private $__codeigniter = FALSE ;

    public function __construct()
    {
        $this->_url = 'https://api.sendgrid.com/api/mail.send.json';
        $this->_user = 'jeffangela1432@gmail.com';
        $this->_password = 'qwerty12345!@#$%';
        $this->_from = 'jeffangela1432@gmail.com';

        $this->__codeigniter =& get_instance();
    }
    public function sendMail($to, $subject, $body)
    {
        $mail_config['api_user'] = $this->_user ;
        $mail_config['api_key'] = $this->_password ;
        $mail_config['to'] = $to ;
        $mail_config['subject'] = $subject ;
        $mail_config['html'] = $body ;
        $mail_config['from'] = $this->_from ;
        $session = curl_init($this->_url);
        curl_setopt($session, CURLOPT_POST, true);
        curl_setopt($session, CURLOPT_POSTFIELDS, $mail_config);
        curl_setopt($session, CURLOPT_HEADER, false);
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($session);
        curl_close($session);
        if ($response === '{"message":"success"}') {
            $return = 1 ;
        } else {
            $return = 0 ;
        }
        return $return;
    }
    public function codeigniter_mail($to, $subject, $body)
    {
        $this->__codeigniter->email->set_mailtype("html");
        $this->__codeigniter->email->from('dhyeyrathod111@gmail.com', 'Dhyey Rathod');
        $this->__codeigniter->email->to($to);
        $this->__codeigniter->email->subject($subject);
        $this->__codeigniter->email->message($body);
        return $this->__codeigniter->email->send();
    }
}