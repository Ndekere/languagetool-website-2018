@extends('layouts.app')

@section('title', 'Contribute to LanguageTool')

@section('content')
    <div id="textContent" class="content-section">

        <div class="container">

            <h1>Contribute to LanguageTool</h1>

            <p>LanguageTool is an Open Source project, so you can contribute to improve it!</p>

            <ul>
                <li>
                    <strong>I want to help LanguageTool</strong> (but I'm not a software developer)<br/>
                    <ul>
                        <li style="margin-top:5px"><a href="https://twitter.com/share?url=https://languagetool.org">tweet</a> or blog about LanguageTool</li>
                        <li><a href="https://forum.languagetool.org">Post improvement ideas to our forum</a></li>
                        <li><a href="https://github.com/languagetool-org/languagetool/issues">Post bugs to our issue tracker</a></li>
                        <li>
                            Improve error detection: LanguageTool detects most
                            errors by looking for error patterns which we call <em>rules</em>. You can write such rules
                            yourself with our online editor and contribute them:
                            <h2 style="margin-top: 0"><a href="http://community.languagetool.org/ruleEditor2/">&gt;&gt;&nbsp;Try our Rule Editor</a></h2>
                        </li>
                    </ul>
                </li>
                <li>
                    <strong>I'm a software developer</strong>
                    <ul>
                        <li style="margin-top:5px">
                            <a href="https://github.com/languagetool-org/">Check out the code from github</a> &mdash;
                            <a href="http://wiki.languagetool.org/development-overview#toc2">More detailed instructions</a>
                        </li>
                        <li><a href="https://github.com/languagetool-org/languagetool/issues?q=is%3Aopen+is%3Aissue+label%3A%22easy+fix%22">Fix an easy-to-fix issue</a></li>
                        <li>Write a plug-in / add-on / extension for your favorite software to integrate LanguageTool
                            (<a href="http://wiki.languagetool.org/software-that-supports-languagetool-as-a-plug-in-or-add-on">list of existing plug-ins</a>)</li>
                    </ul>
                </li>
            </ul>


            <p style="margin-top: 20px">To join the LanguageTool community, please join our <a href="https://forum.languagetool.org">forum</a>,
                where all the discussion happens.</p>
            
        </div>
            
    </div>

@endsection
