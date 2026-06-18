<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Database\Seeders\IIRSSeeder;
use App\Models\Teacher;
use App\Models\Newse;
use App\Models\Program;

class ConversionTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        // Run the seeder to populate the SQLite database for testing
        $this->seed(IIRSSeeder::class);
    }

    /**
     * Test homepage renders correctly and contains dynamic settings data.
     */
    public function test_homepage_loads_dynamic_settings(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        // Verify HOD settings are loaded
        $response->assertSee('Dr. Shoukat Hayat');
        $response->assertSee('Vice Principal and HOD Rehab Clinic');
        $response->assertSee('Welcome to the Isra Institute of Rehabilitation Sciences');

        // Verify contact info is loaded
        $response->assertSee('Lehtrar Road, Farash Town Phase II, Islamabad');
        $response->assertSee('92-51-8439901-10');
        $response->assertSee('Info.isb@isra.edu.pk');
    }

    /**
     * Test news list and news detail pages load dynamically.
     */
    public function test_news_pages_load_dynamically(): void
    {
        $response = $this->get('/allnews');
        $response->assertStatus(200);
        $response->assertSee('Sports Event 2026');

        $news = Newse::first();
        $this->assertNotNull($news);

        $detailResponse = $this->get('/news/' . $news->id);
        $detailResponse->assertStatus(200);
        $detailResponse->assertSee($news->title);
        $detailResponse->assertSee($news->description);
    }

    /**
     * Test programs list and program detail pages load dynamically.
     */
    public function test_program_pages_load_dynamically(): void
    {
        $response = $this->get('/programs');
        $response->assertStatus(200);
        $response->assertSee('Doctor of Physical Therapy');

        $program = Program::first();
        $this->assertNotNull($program);

        $detailResponse = $this->get('/program/' . $program->id);
        $detailResponse->assertStatus(200);
        $detailResponse->assertSee($program->name);
        $detailResponse->assertSee($program->mission);
    }

    /**
     * Test teachers list and teacher detail pages load dynamically.
     */
    public function test_teacher_pages_load_dynamically(): void
    {
        $response = $this->get('/teachers');
        $response->assertStatus(200);

        $teacher = Teacher::first();
        $this->assertNotNull($teacher);

        // Check that the first teacher's name appears on index page
        $response->assertSee($teacher->name);

        $detailResponse = $this->get('/teacher/' . $teacher->id);
        $detailResponse->assertStatus(200);
        $detailResponse->assertSee($teacher->name);
        $detailResponse->assertSee($teacher->designation);
        if ($teacher->email) {
            $detailResponse->assertSee($teacher->email);
        }
    }

    /**
     * Test about page renders successfully and contains dynamic settings data.
     */
    public function test_about_page_loads_dynamic_settings(): void
    {
        $response = $this->get('/about');
        $response->assertStatus(200);

        // Verify vision and mission are loaded
        $response->assertSee('Isra Institute of Rehabilitation Sciences aims to produce competent');
        $response->assertSee('The institute promotes critical thinking and inquiry');

        // Verify quick stats are loaded
        $response->assertSee('2011');
        $response->assertSee('HEC');

        // Verify HOD message is loaded
        $response->assertSee('Dr. Shoukat Hayat');
        $response->assertSee('Vice Principal and HOD Rehab Clinic');
        $response->assertSee('Welcome to the Isra Institute of Rehabilitation Sciences');
    }

    /**
     * Test contact page renders successfully and contains dynamic contact settings.
     */
    public function test_contact_page_loads_dynamic_settings(): void
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);

        // Verify contact info is loaded
        $response->assertSee('Lehtrar Road, Farash Town Phase II, Islamabad');
        $response->assertSee('92-51-8439901-10');
        $response->assertSee('Info.isb@isra.edu.pk');

        // Verify HOD info is loaded
        $response->assertSee('Dr. Shoukat Hayat');
        $response->assertSee('Department Head');
    }
}
