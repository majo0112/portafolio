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
            // Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST');
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');
            $mail->SMTPSecure = env('MAIL_ENCRYPTION', 'ssl');
            $mail->Port = env('MAIL_PORT', 465);
                                          
            //Recipients
            $mail->setFrom('mariajosepavamedina0112@gmail.com', 'Portafolio');
            $mail->addAddress('mariajosepavamedina0112@gmail.com');     
          
            //Content
            $mail->isHTML(true);                                  
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