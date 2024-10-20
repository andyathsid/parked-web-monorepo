<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $tittle = 'HOME';
        return \view('frontend/home', \compact('user', 'tittle'));
    }
    public function Resources()
    {
        $user = Auth::user();
        $tittle = 'Resources';
        return \view('frontend/Resources', \compact('user', 'tittle'));
    }
    public function ResourcesDetail($encriptid)
    {

        $id = Crypt::decrypt($encriptid);
        // echo $id;
        // \dd($id);
        // $id = 1;
        $user = Auth::user();
        $tittle = 'Resources Detail';
        if ($id == 1) {
            $data = [
                "judul" => "Physiotherapy for Parkinson's Disease",
                "gambar" => "assets/img/physiotherapy.png",
                "isi" => "
                    <h2>What is Physiotherapy?</h2>
                    <p>Physiotherapy is a crucial component in managing Parkinson's disease. It involves physical methods to
                        improve movement, function, and overall well-being. For Parkinson's patients, physiotherapy aims to
                        maintain and improve mobility, balance, and quality of life.</p>

                    <h3>Key Physiotherapy Techniques for Parkinson's:</h3>
                    <ul>
                        <li><strong>Gait Training:</strong> Improves walking pattern and reduces fall risk.</li>
                        <li><strong>Balance Exercises:</strong> Enhances stability and prevents falls.</li>
                        <li><strong>Stretching:</strong> Maintains flexibility and reduces muscle stiffness.</li>
                        <li><strong>Strength Training:</strong> Builds muscle power and improves posture.</li>
                        <li><strong>Aerobic Exercises:</strong> Boosts cardiovascular health and energy levels.</li>
                        <li><strong>Fine Motor Skill Exercises:</strong> Improves hand dexterity for daily tasks.</li>
                    </ul>

                    <h3>The Physiotherapy Process:</h3>
                    <ol>
                        <li><strong>Assessment:</strong> Evaluating the patient's condition and specific needs.</li>
                        <li><strong>Goal Setting:</strong> Establishing realistic and achievable objectives.</li>
                        <li><strong>Treatment Plan:</strong> Designing a personalized therapy program.</li>
                        <li><strong>Regular Sessions:</strong> Implementing exercises and techniques under guidance.</li>
                        <li><strong>Home Exercise Program:</strong> Providing exercises for continued practice at home.</li>
                        <li><strong>Progress Monitoring:</strong> Regular evaluations to adjust the treatment plan as needed.
                        </li>
                    </ol>

                    <p>Physiotherapy for Parkinson's is an ongoing process, often requiring long-term commitment. It's most
                        effective when started early and maintained consistently throughout the course of the disease.</p>
                    "

            ];
        } else if ($id == 2) {
            $data = [
                "judul" => "Speech Therapyp for Parkinson's Disease",
                "gambar" => "assets/img/speech-therapy.png",
                "isi" => "
                <h2>What is Speech Therapy?</h2>
                <p>Speech therapy is a crucial component in managing communication and swallowing difficulties associated with Parkinson's disease. It involves working with a speech-language pathologist to improve speech, voice quality, and swallowing function. For Parkinson's patients, speech therapy aims to maintain and enhance communication abilities and safe swallowing.</p>
                
                <h3>Key Speech Therapy Techniques for Parkinson's:</h3>
                <ul>
                    <li><strong>Lee Silverman Voice Treatment (LSVT LOUD):</strong> Focuses on increasing vocal loudness and improving speech clarity.</li>
                    <li><strong>Articulation Exercises:</strong> Improves clarity of speech and pronunciation.</li>
                    <li><strong>Breath Support Techniques:</strong> Enhances breath control for better speech production.</li>
                    <li><strong>Swallowing Exercises:</strong> Strengthens muscles involved in swallowing to prevent aspiration.</li>
                    <li><strong>Facial Exercises:</strong> Improves facial muscle strength for better expression and speech.</li>
                    <li><strong>Pitch and Intonation Practice:</strong> Helps maintain natural speech patterns and expressiveness.</li>
                </ul>
                
                <h3>The Speech Therapy Process:</h3>
                <ol>
                    <li><strong>Initial Assessment:</strong> Evaluating the patient's speech, voice, and swallowing abilities.</li>
                    <li><strong>Goal Setting:</strong> Establishing realistic objectives for improvement.</li>
                    <li><strong>Treatment Plan:</strong> Designing a personalized therapy program.</li>
                    <li><strong>Regular Sessions:</strong> Implementing exercises and techniques under guidance.</li>
                    <li><strong>Home Practice:</strong> Providing exercises for continued practice at home.</li>
                    <li><strong>Progress Monitoring:</strong> Regular evaluations to adjust the treatment plan as needed.</li>
                </ol>
                
                <p>Speech therapy for Parkinson's is an ongoing process that can significantly improve quality of life and maintain communication abilities. It's most effective when started early and maintained consistently throughout the course of the disease.</p>
                    "

            ];
        } else if ($id == 3) {
            $data = [
                "judul" => "Psychotherapy for Parkinson's Disease",
                "gambar" => "assets/img/psychoteraphy.jpg",
                "isi" => "
                <h2>What is Psychotherapy?</h2>
                <p>Psychotherapy is an essential component in managing the mental and emotional aspects of Parkinson's disease. It involves talking with a mental health professional to address psychological challenges, improve coping skills, and enhance overall well-being. For Parkinson's patients, psychotherapy aims to manage depression, anxiety, and other emotional difficulties associated with the condition.</p>
                
                <h3>Key Psychotherapy Approaches for Parkinson's:</h3>
                <ul>
                    <li><strong>Cognitive Behavioral Therapy (CBT):</strong> Helps change negative thought patterns and behaviors.</li>
                    <li><strong>Mindfulness-Based Therapy:</strong> Promotes present-moment awareness and stress reduction.</li>
                    <li><strong>Acceptance and Commitment Therapy (ACT):</strong> Focuses on accepting challenges and committing to personal values.</li>
                    <li><strong>Supportive Psychotherapy:</strong> Provides emotional support and validation.</li>
                    <li><strong>Family Therapy:</strong> Addresses relationship dynamics and improves family support.</li>
                    <li><strong>Group Therapy:</strong> Offers peer support and shared experiences.</li>
                </ul>
                
                <h3>The Psychotherapy Process:</h3>
                <ol>
                    <li><strong>Initial Assessment:</strong> Evaluating the patient's psychological needs and concerns.</li>
                    <li><strong>Goal Setting:</strong> Establishing realistic therapeutic objectives.</li>
                    <li><strong>Treatment Plan:</strong> Designing a personalized therapy approach.</li>
                    <li><strong>Regular Sessions:</strong> Engaging in ongoing therapeutic conversations and exercises.</li>
                    <li><strong>Coping Strategies:</strong> Developing techniques for managing stress and emotions.</li>
                    <li><strong>Progress Evaluation:</strong> Regular reviews to adjust the treatment plan as needed.</li>
                </ol>
                
                <p>Psychotherapy for Parkinson's is an ongoing process that can significantly improve quality of life. It's most effective when integrated with medical treatment and started early in the disease progression.</p>
                    "
            ];
        } else if ($id == 4) {
            $data = [
                "judul" => "Deep Brain Stimulation for Parkinson's Disease",
                "gambar" => "assets/img/DBS.jpg",
                "isi" => "
                <h2>What is Deep Brain Stimulation?</h2>
                <p>Deep Brain Stimulation (DBS) is a surgical procedure used to treat various neurological symptoms of Parkinson's disease. It involves implanting electrodes in specific areas of the brain and connecting them to a small electrical device called a neurostimulator. This device sends electrical pulses to the brain to help control movement symptoms.</p>
                
                <h3>Key Aspects of Deep Brain Stimulation:</h3>
                <ul>
                    <li><strong>Target Areas:</strong> Usually the subthalamic nucleus or globus pallidus interna.</li>
                    <li><strong>Symptom Management:</strong> Helps control tremors, rigidity, and bradykinesia.</li>
                    <li><strong>Medication Reduction:</strong> Often allows for a decrease in Parkinson's medications.</li>
                    <li><strong>Adjustable Treatment:</strong> Stimulation can be adjusted as the disease progresses.</li>
                    <li><strong>Reversible Procedure:</strong> The device can be turned off or removed if necessary.</li>
                    <li><strong>Bilateral Application:</strong> Often performed on both sides of the brain.</li>
                </ul>
                
                <h3>The DBS Process:</h3>
                <ol>
                    <li><strong>Patient Selection:</strong> Determining if DBS is appropriate for the individual.</li>
                    <li><strong>Pre-surgical Evaluation:</strong> Comprehensive neurological and psychological assessments.</li>
                    <li><strong>Surgery:</strong> Implantation of electrodes and neurostimulator.</li>
                    <li><strong>Recovery:</strong> Initial healing period after surgery.</li>
                    <li><strong>Programming:</strong> Adjusting the device settings for optimal symptom control.</li>
                    <li><strong>Ongoing Management:</strong> Regular check-ups and adjustments as needed.</li>
                </ol>
                
                <p>Deep Brain Stimulation can significantly improve quality of life for many Parkinson's patients, especially those who have had an inconsistent response to medication. However, it's not suitable for everyone, and a thorough evaluation is necessary to determine if it's the right treatment option.</p>
                    "

            ];
        } else if ($id == 5) {
            $data = [
                "judul" => "Gamma Knife Surgery for Parkinson's Disease",
                "gambar" => "assets/img/gamma-knife-surgery.jpg",
                "isi" => "
                <h2>What is Gamma Knife Surgery?</h2>
                <p>Gamma Knife Surgery, also known as stereotactic radiosurgery, is a non-invasive treatment option for various neurological conditions, including certain symptoms of Parkinson's disease. It uses highly focused beams of gamma radiation to target specific areas of the brain without the need for traditional open surgery.</p>
                
                <h3>Key Aspects of Gamma Knife Surgery:</h3>
                <ul>
                    <li><strong>Non-Invasive:</strong> No incisions are made; treatment is delivered through the skull.</li>
                    <li><strong>Precise Targeting:</strong> Allows for accurate treatment of small brain areas.</li>
                    <li><strong>Single Session:</strong> Usually completed in one treatment session.</li>
                    <li><strong>Minimal Side Effects:</strong> Fewer complications compared to traditional brain surgery.</li>
                    <li><strong>Outpatient Procedure:</strong> Patients typically go home the same day.</li>
                    <li><strong>Tremor Management:</strong> Particularly effective for treating tremors in Parkinson's patients.</li>
                </ul>
                
                <h3>The Gamma Knife Surgery Process:</h3>
                <ol>
                    <li><strong>Patient Evaluation:</strong> Determining if Gamma Knife is suitable for the individual.</li>
                    <li><strong>Treatment Planning:</strong> Detailed imaging and planning of the radiation delivery.</li>
                    <li><strong>Frame Placement:</strong> A lightweight frame is attached to the patient's head for precision.</li>
                    <li><strong>Radiation Delivery:</strong> The patient lies still while radiation is delivered to the target area.</li>
                    <li><strong>Recovery:</strong> Brief observation period after the procedure.</li>
                    <li><strong>Follow-up:</strong> Regular check-ups to monitor the treatment's effectiveness.</li>
                </ol>
                
                <p>Gamma Knife Surgery can be an effective option for managing certain Parkinson's symptoms, particularly tremors, in cases where medication is not providing adequate relief. However, it's not suitable for all Parkinson's symptoms or all patients. A thorough evaluation by a specialist is necessary to determine if it's an appropriate treatment option.</p>
                    "

            ];
        }

        return \view('frontend.ResourceDetail', \compact('user', 'tittle', 'data'));
    }
    public function information()
    {
        $user = Auth::user();
        $tittle = 'Information';
        return \view('frontend.Information', \compact('user', 'tittle'));
    }
}
