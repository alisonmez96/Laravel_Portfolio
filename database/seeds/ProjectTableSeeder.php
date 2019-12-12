<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project = new Project([
            'titel' => 'Integration: Mobile: Foyer App',
            'gebruikteTaal' => 'Javascript, Html, Css, Ajax',
            'beschrijving' => 'The students work in the second integration project 
            team connection to the design and development of a mobile app. Through the 
            project weeks are passed through all phases that together comprise the entire process 
            to arrive at a final product. The students will be intensive during this period 
            supervised by teachers of the training.',
            'project_image' => 'project1.png'
        ]);
        $project->save();

        $project = new Project([
            'titel' => 'User Experience Design: Atomium App',
            'gebruikteTaal' => 'Design',
            'beschrijving' => 'Using various cases and exercises for, for example, desktop software, websites,
            data visualization, mobile apps and touchscreen applications, we go through all the steps of the user
            centered design process. The focus is on the total user experience of the product or service to be developed.
            A good knowledge of your target group and end user is important.',
            'project_image' => 'project2.png'
        ]);
        $project->save();

        $project = new Project([
            'titel' => 'Integration: Mobile Hbits',
            'gebruikteTaal' => 'Javascript, Html, Css, Ajax',
            'beschrijving' => 'The students work in the second integration project 
            team connection to the design and development of a mobile app. Through the 
            project weeks are passed through all phases that together comprise the entire process 
            to arrive at a final product. The students will be intensive during this period 
            supervised by teachers of the training.',
            'project_image' => 'project3.png'
        ]);
        $project->save();

        $project = new Project([
            'titel' => 'Stripverhaal: Hoe ziet mijn dag eruit?',
            'gebruikteTaal' => 'Design',
            'beschrijving' => 'In this course the student acquaints with design in general and graphic design in particular.
            Basic principles such as color theory, typography, composition and layout receive a lot of attention.',
            'project_image' => 'project4.png'
        ]);
        $project->save();

        $project = new Project([
            'titel' => 'Integration: Party Radar',
            'gebruikteTaal' => 'Java',
            'beschrijving' => 'In this course the students work out a project in a team with a mobile application as the end result.
            The assignment is delivered by the work field. The project groups will work on this assignment to build the mobile
            application themselves, from concept to realization. The project is being completed in different phases.',
            'project_image' => 'project5.png'
        ]);
        $project->save();

        $project = new Project([
            'titel' => 'Integration: La Fonderie',
            'gebruikteTaal' => 'Swift',
            'beschrijving' => 'During three project weeks an interactive multimedia application will be developed as a team.
            First a functional analysis is made of the needs and objectives. On this basis, the visual and functional design and the
            technical design are worked out. In the implementation phase, these designs are realized as a Java application.',
            'project_image' => 'project6.png'
        ]);
        $project->save();
    }
}
