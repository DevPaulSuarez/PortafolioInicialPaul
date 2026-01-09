<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    // Mostrar el formulario de contacto
    public function showForm()
    {
        return view('contact');
    }
    // Enviar el correo con los datos del formulario
    public function sendEmail(Request $request)
    {
        // 1️⃣ Honeypot: bloquea bots que rellenan campos ocultos
        if ($request->filled('company')) {
            abort(400); // bloqueo silencioso
        }

        // 2️⃣ Bloquear mensajes con links sospechosos
        if (preg_match('/(http|https|www\.|\.gy|\.ru|\.xyz)/i', $request->message)) {
            abort(400);
        }

        // 3️⃣ Validación del formulario
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        // 4️⃣ Enviar correo
        try {
            Mail::to('paulSuarez018@gmail.com')->send(new ContactFormMail($validated));
            return back()->with('success', 'Tu mensaje ha sido enviado exitosamente');
        } catch (\Exception $e) {
            return back()->with('error', 'Hubo un error al enviar tu mensaje. Inténtalo nuevamente.');
        }
    }

}


