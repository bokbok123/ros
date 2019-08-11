@extends('layouts.app')

@section('content')
    <section class="section-1">
        <h1>
            GAME CHEAT SHEET <br>
            RELEASE ALL THE UPDATED CHEAT<br>
            UPGRADE SOON.
        </h1>
    </section>


    <div class="container">
        <section class="section-2">
            <div>
                <h1>DOWNLOAD YOUR CHEAT NOW</h1>

                <h2>Public Release:</h2>
                <p> Date:
                    <?php
                    $mytime = Carbon\Carbon::now();
                    echo $mytime->format('m-d-Y') ?>
                </p>

                <p>ExiledROS cheat</p>
                <p>Instruction :</p>
                <p>1. First you need to Download the Updated Version of cheat from the below links</p>
                <p><a href="https://shrtfly.com/st?api=cd5886af7d7aaa7c11b5d04d30998f6b29ceac46&url=https://mega.nz/#!mpRxAQqK!IFKPnTjmBEXb1c62zAeWjT-Q1TSlG_XEs8lFXRKN5C0">
                    Click Here
                </a></p>


                <p>2. After click on the “Active Cheat” button you will be redirected to the Captcha Solving site where you will have to solve the captcha and get the link.</p>
                <p>3. Don’t close the loader, Open the game and play</p>
                <p>4. You need to use the Left Mouse for enable hack, Right mouse for disable and Press Insert to hide/show menu</p>
                <p>5. You can also drag the menu to anywhere you want.</p>

                <h1>Got Error?</h1>
                <h2>Solution: Error 1</h2>
                <p>1. If you get Error “Cannot find MSVCP120.dll</p>
                <img src="{{ url('storage/error/errorcode.jpg') }}" />
                <p>2. Then Please download this and copy paste it to your C:\Windows\System32 and C:\Windows\SysWow64 folder
                    MSVCP120.dll: </p>
                <p><a href="https://shrtfly.com/st?api=cd5886af7d7aaa7c11b5d04d30998f6b29ceac46&url=https://mega.nz/#!c1Y1HAoS!tzWHdOUKoG1QhKuQfDR0HtHvzsMM3dbLo5_wIasFjSg">
                        Click Here</a></p>
                <hr/>

                <h2>Solution: Error 2</h2>
                <p>1 .If you get Unhandled exception has occurred in your application error while installing ExiledRos then you need to install Microsoft .Net Framework latest version. If you have already installed .Net Framework then repair it by going to Control Panel>Microsoft .Net framework>Repair</p>

            </div>
        </section>

    </div>

    <footer>
        Rules of Survival Cheat Copyright 2019
    </footer>

@endsection
