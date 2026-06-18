<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Slide;
use App\Models\Program;
use App\Models\Newse;
use App\Models\Notice;
use App\Models\Teacher;
use App\Models\Event;

class IIRSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Truncate tables
        \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();
        Slide::truncate();
        Program::truncate();
        Newse::truncate();
        Notice::truncate();
        Teacher::truncate();
        Event::truncate();
        \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();

        $this->command->info("Truncated existing dynamic tables.");

        // 2. Seed Slides from config
        $slides = config('slides_db', []);
        foreach ($slides as $slideData) {
            Slide::create($slideData);
        }
        $this->command->info("Seeded slides.");

        // 3. Seed Programs from config
        $programs = config('programs_db', []);
        foreach ($programs as $programData) {
            Program::create($programData);
        }
        $this->command->info("Seeded programs.");

        // 4. Seed Newses from config
        $newses = config('newses_db', []);
        foreach ($newses as $newsData) {
            Newse::create($newsData);
        }
        $this->command->info("Seeded news.");

        // 5. Seed Notices from config
        $notices = config('notices_db', []);
        foreach ($notices as $noticeData) {
            Notice::create($noticeData);
        }
        $this->command->info("Seeded notices.");

        // 6. Seed Events from config
        $events = config('events_db', []);
        foreach ($events as $eventData) {
            Event::create($eventData);
        }
        $this->command->info("Seeded events.");

        // 7. Seed Teachers from config
        $faculty = config('faculty', []);
        $sortOrder = 1;
        foreach ($faculty as $id => $teacherData) {
            Teacher::create([
                'id' => $id,
                'name' => $teacherData['name'],
                'designation' => $teacherData['designation'],
                'photo' => $teacherData['image'],
                'sort_order' => $sortOrder++,
                'qualifications' => $teacherData['qualifications'] ?? null,
                'description' => $teacherData['description'] ?? null,
                'current_positions' => $teacherData['tabs']['current-positions'] ?? null,
                'education' => $teacherData['tabs']['education'] ?? null,
                'experience' => $teacherData['tabs']['experience'] ?? null,
                'publications' => $teacherData['tabs']['publications'] ?? null,
                'awards' => $teacherData['tabs']['awards'] ?? null,
                'email' => $teacherData['email'] ?? null,
                'contact_number' => $teacherData['contact_number'] ?? null,
                'code' => $teacherData['code'] ?? ('IIRS-' . sprintf('%03d', $id)),
                'department' => $teacherData['department'] ?? 'Isra Institute of Rehabilitation Sciences (IIRS)',
            ]);
        }
        $this->command->info("Seeded teachers.");

        // 8. Seed/Update Voyager Settings
        $settings = [
            'site.title' => 'Isra Institute of Rehabilitation Sciences (IIRS) :: Isra University Islamabad Campus',
            'site.description' => 'Isra Institute of Rehabilitation Sciences (IIRS), Isra University Islamabad Campus',
            'sections.section_welcome_title' => 'Welcome to Isra Institute of Rehabilitation Sciences (IIRS) Isra University, Islamabad Campus',
            'sections.section_reasons_title' => 'Why Isra Institute of Rehabilitation Sciences (IIRS)?',
            'sections.sections_reasons_subtitle' => 'Our key highlights',
            'about.vision' => 'Isra Institute of Rehabilitation Sciences aims to produce competent rehabilitation practitioners who capable to conducting unique and independent research.',
            'about.mission' => 'The institute promotes critical thinking and inquiry to foster an environment of research and learning. Its programs have been designed to meet the growing demand of rehabilitation patients from injuries and disabilities. Its graduates are equipped with skills and aptitude to provides effective care in restoring bodily care, function mobility, relieving pain and contributing towards the better life style for patients.',
            'about.overview_p1' => 'The Isra Institute of Rehabilitation Sciences (IIRS), established in 2011 under Isra University, is a non-profit institution dedicated to excellence in rehabilitation sciences education, clinical training, and research. The institute is committed to providing high-quality academic programs and advanced clinical exposure to meet the evolving healthcare needs of society.',
            'about.overview_p2' => 'The primary objective of the institute is to produce competent and skilled healthcare professionals capable of restoring movement, reducing pain, improving physical function, and enhancing the quality of life of patients through evidence-based rehabilitation practices. The institute emphasizes non-invasive treatment approaches that minimize the need for surgical procedures and long-term medication use.',
            'about.overview_p3' => 'Since its establishment, IIRS has achieved remarkable academic and professional milestones. The institute has proudly produced 32 PhD scholars, 281 graduates in Master of Rehabilitation Sciences programs, and more than 400 graduates in the Doctor of Physical Therapy (DPT) program. Graduating students are equipped with the skills and aptitude to provide effective care in multidisciplinary health care departments.',
            'about.overview_p4' => 'On the academic front, the institute provides a modern learning environment with fully equipped classrooms supported by advanced educational resources. The state-of-the-art laboratories are furnished with essential equipment required for both basic and advanced rehabilitation sciences programs, ensuring comprehensive practical and clinical training.',
            'hod.name' => 'Dr. Shoukat Hayat',
            'hod.title' => 'Vice Principal and HOD Rehab Clinic',
            'hod.photo' => 'settings/hod_dr_shoukat_hayat.jpeg',
            'hod.message' => 'Welcome to the Isra Institute of Rehabilitation Sciences',
            'hod.message_body' => 'It gives me great pleasure to welcome both prospective and current students to our department. Whether you are taking your first step toward a career in rehabilitation or returning to advance your expertise, you have joined a community dedicated to learning, service, and innovation in healthcare. At Isra Institute of Rehabilitation Sciences, our mission is to produce competent rehabilitation practitioners who are capable of conducting unique and independent research. We are committed to academic excellence and continuously align our programs with national accreditation standards to ensure our graduates meet the highest professional benchmarks. This commitment drives our curriculum design, teaching practices, and quality assurance processes. Our strength lies in our people and facilities. Our faculty comprises experienced clinicians, researchers, and educators who bring both academic rigor and practical insight into the classroom and clinic. They mentor students to think critically, question assumptions, and pursue inquiry that addresses real challenges in rehabilitation. To support this, we maintain modern laboratories and clinical training facilities that provide hands-on exposure to assessment, intervention, and assistive technologies. The learning environment is collaborative, student-centered, and designed to foster both professional competence and ethical practice. The scope of rehabilitation sciences continues to expand as the demand for care grows among patients recovering from injury, surgery, and disability. Our graduates are equipped with the skills and aptitude to provide effective care in restoring bodily function and mobility, relieving pain, and improving overall quality of life. They work in hospitals, rehabilitation centers, community health programs, research institutions, and private practice, contributing to better outcomes and a better lifestyle for the patients they serve. I invite you to join us in this meaningful field. At Isra Institute of Rehabilitation Sciences, you will find the knowledge, mentorship, and resources to build a career that combines science, compassion, and impact.',
            'contact.address' => 'Lehtrar Road, Farash Town Phase II, Islamabad',
            'contact.phone' => '92-51-8439901-10',
            'contact.email' => 'Info.isb@isra.edu.pk',
            'contact.moodle_url' => '#',
            'contact.dreamspark_url' => '#',
            'contact.alumni_url' => '#',
            'contact.twitter_url' => '#',
            'contact.facebook_url' => 'https://web.facebook.com/IsraUniversity.islamabad',
            'contact.youtube_url' => '#',
            'site.logo' => 'settings/isra_logo.png',
        ];

        foreach ($settings as $key => $value) {
            DB::table('settings')->where('key', $key)->update(['value' => $value]);
            
            // If the setting key doesn't exist, insert it (to avoid missing Voyager settings errors)
            $exists = DB::table('settings')->where('key', $key)->exists();
            if (!$exists) {
                // Find group name
                $parts = explode('.', $key);
                $group = count($parts) > 1 ? ucfirst($parts[0]) : 'Site';
                
                DB::table('settings')->insert([
                    'key' => $key,
                    'display_name' => ucwords(str_replace(['.', '_'], ' ', $key)),
                    'value' => $value,
                    'details' => '',
                    'type' => 'text',
                    'order' => 1,
                    'group' => $group
                ]);
            }
        }
        $this->command->info("Updated site settings.");
    }
}
