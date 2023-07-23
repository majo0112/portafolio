<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
/**use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;*/

class ContactController extends Controller
{
    public function submitForm()
    {
        return view('contact'); 
    }

    function sendmail(Request $request)
    {

     try {

             $mail = new PHPMailer(true);
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'mariajosepavamedina0112@gmail.com';                     //SMTP username
            $mail->Password   = 'twmkjwnufvbpcixn';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('mariajosepavamedina0112@gmail.com', 'Portafolio');
            $mail->addAddress('mariajosepavamedina0112@gmail.com');     
          
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $request->subject; 
            $messageContent = "Name: {$request->name}<br>";
            $messageContent .= "Email: {$request->email}<br>";
            $messageContent .= "Message: {$request->message}";
            $mail->Body = $messageContent;
            $mail->send();
            return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}

    /**$request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);

    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
    ];

    Mail::to('mariajosepavamedina0112@gmail.com')->send(new ContactMail($data));

    return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
}
}
*/