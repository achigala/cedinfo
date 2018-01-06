<?php
use yii\bootstrap\Nav;

?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->


       <?=
        Nav::widget(
            [
                'encodeLabels' => false,
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'CED|Admin Menu', 'options' => ['class' => 'header']],
                    ['label' => 'NEWS', 'icon' => 'user-plus', 'url' => ['/news'],],
                    ['label' => 'Teacher', 'icon' => 'user-plus', 'url' => ['/teacher'],],
                    [
                        'label' => 'Room',
                        'icon' => 'laptop',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Room Detial',  'url' => ['/room'],],
                            ['label' => 'Booking', 'url' => ['/booking'],],

                        ],
                    ],
                    [
                        'label' => 'teaching',
                        'icon' => 'list-alt',
                        'url' => '#',
                        'items' => [
                            ['label' => 'subject',  'url' => ['/subject'],],
                            ['label' => 'class schduel', 'url' => ['/lab/index'],],
                        ],
                    ],
                    ['label' => 'Event', 'icon' => 'calendar', 'url' => ['/event'],],
                ],
        ])?>

    </section>

</aside>
