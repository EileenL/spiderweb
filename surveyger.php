<?php
?>
    <head>
        <title> Uni evaluation </title>
        <meta charset="UTF-8">
        <link href="libs/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
    <div class="dropdown" align="right" style="margin-right:50px;margin-top:10px">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sprache
            <span class="caret"></span></button>
        <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="surveyger.php">deutsch</a></li>
            <li><a href="surveyeng.php">englisch</a></li>
        </ul>
    </div>
    <script src="libs/jquery.js"></script>
    <script src="libs/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <div align="center" style="margin-top: 5px;">
        <h2><u> Universitäts-Evaluation </u></h2>
        <p align="left" style="margin-left:28%">
            In der nachfolgenden Tabelle sehen sie verschiedene Kriterien einer Universität.<br>
            Bitte geben Sie in der obersten Spalte an, welche Universität Sie evaluieren möchten.<br>
            Nachfolgend stehen 8 Dimensionen zur Bewertung offen, in denen Sie einschätzen können in welcher Richtung sie am stärksten ausgeprägt sind.<br>
            Sollte ihre zu beschreibene Universität ihrer Auffassung nach in beiden Richtungen gleich stark vertreten sein, wählen sie die Mitte.<br>
            <br>
            Nach dem Absenden des Fragebogens werden Sie weitergeleitet und können ihre Antworten grafisch dargestellt betrachten.
        </p> <!-- explanation text -->
        <form name="survey" method="POST" action="servicein.php">
            <div class="panel-group" id="forms">
                <div class="panel panel-default">
                    <div class="panel-collapse collapse in" id="first">
                        <table style="width:900px" class="table table-bordered table-striped js-options-table">
                            <tr>
                                <td width="38%">
                                    Uni:
                                </td>
                                <td colspan="3">
                                    <div align="right"><input name="uni" placeholder="uni" size="72%" ></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="38%">
                                    Kurs:
                                </td>
                                <td colspan="3">
                                    <div align="right"><input name="course" placeholder="course" size="72%" ></div>
                                </td>
                            </tr>
            </table> <!-- all dimensions of the universities -->
            <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#second"> weiter </button>
    </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-collapse collapse" id="second">
            <table style="width:900px" class="table table-bordered table-striped js-options-table">
            <tr>
                <td width="19%">
                    Wie sieht die curriculare Einbindung aus?
                </td>
                <td width="27%">
                    Die studentische Forschung der ist mit Credit Points versehen und wird benotet.
                </td>
                <td width="27%">
                    Die studentische Forschung ist unbenotet, aber mit Credit Points versehen.
                </td>
                <td width="27%">
                    Die studentische Forschung wird nicht mit Credit Points versehen.
                </td>
            </tr>
                <tr>
                    <td></td>
                    <td align="center">
                        <input type="radio" name="knowledgebuilding" value="1">
                    </td>
                    <td align="center">
                        <input type="radio" name="knowledgebuilding" value="2">
                    </td>
                    <td align="center">
                        <input type="radio" name="knowledgebuilding" value="3">
                    </td>
                </tr>
            </table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
            <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#first"> zurück </button>
            <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#third"> weiter </button>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-collapse collapse" id="third">
            <table style="width:900px" class="table table-bordered table-striped js-options-table">
                <tr>
                    <td width="19%">
                        Wie ist die Gewichtung /CP-Anzahl) im Curriculum?
                    </td>
                    <td width="27%">
                        Die studentische Forschung hat im Studiengang / Modul ein relativ großes Gewicht.
                    </td>
                    <td width="27%">
                        Die studentische Forschung hat im Studiengang / Modul ein relativ geringes Gewicht.
                    </td>
                    <td width="27%">
                        Die Forschung hat für die Studierenden ein ausschließlich ideelles Gewicht.
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td align="center">
                        <input type="radio" name="negotiable" value="1">
                    </td>
                    <td align="center">
                        <input type="radio" name="negotiable" value="2">
                    </td>
                    <td align="center">
                        <input type="radio" name="negotiable" value="3">
                    </td>
                </tr>
            </table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
            <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#second"> zurück </button>
            <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fourth"> weiter </button>
        </div>
    </div>
                <div class="panel panel-default">
                    <div class="panel-collapse collapse" id="fourth">
                        <table style="width:900px" class="table table-bordered table-striped js-options-table">
                            <tr>
                                <td width="19%">
                                    Wie sieht die modulare Verortung aus?
                                </td>
                                <td width="27%">
                                    Die studentische Forschung ist für Studierende Pflicht.
                                </td>
                                <td width="27%">
                                    Die studentische Forschung ist für Studierende ein Wahlpflichtangebot.
                                </td>
                                <td width="27%">
                                    Die Studierenden nehmen an der Forschung freiwillig teil.
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="center">
                                    <input type="radio" name="topic" value="1">
                                </td>
                                <td align="center">
                                    <input type="radio" name="topic" value="2">
                                </td>
                                <td align="center">
                                    <input type="radio" name="topic" value="3">
                                </td>
                            </tr>
                        </table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#third"> zurück </button>
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fifth"> weiter </button>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-collapse collapse" id="fifth">
                        <table style="width:900px" class="table table-bordered table-striped js-options-table">
                            <tr>
                                <td width="19%">
                                    Wie ist der Prüfungsrahmen gestaltet?
                                </td>
                                <td width="27%">
                                    Für die Bewertung der studentischen Forschung ist eine Prüfungsform vorgegeben.
                                </td>
                                <td width="27%">
                                    Für die Bewertung der studentischen Forschung kann zwischen mehreren Prüfungsform gewählt werden.
                                </td>
                                <td width="27%">
                                    Die studentischen Forschung wird nicht über eine Prüfung bewertet.
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="center">
                                    <input type="radio" name="question" value="1">
                                </td>
                                <td align="center">
                                    <input type="radio" name="question" value="2">
                                </td>
                                <td align="center">
                                    <input type="radio" name="question" value="3">
                                </td>
                            </tr>
                        </table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fourth"> zurück </button>
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#sixth"> weiter </button>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-collapse collapse" id="sixth">
                        <table style="width:900px" class="table table-bordered table-striped js-options-table">
                            <tr>
                                <td width="19%">
                                    Wie ist der Zeitrahmen gestaltet?
                                </td>
                                <td width="27%">
                                    Für die studentische Forschung steht ein Semester zur Verfügung.                                </td>
                                <td width="27%">
                                    Für die studentische Forschung steht mehr als ein Semester zur Verfügung.
                                </td>
                                <td width="27%">
                                    Studentische Forschung kann begleitend während des Studiums erfolgen.
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="center">
                                    <input type="radio" name="tasks" value="1">
                                </td>
                                <td align="center">
                                    <input type="radio" name="tasks" value="2">
                                </td>
                                <td align="center">
                                    <input type="radio" name="tasks" value="3">
                                </td>
                            </tr>
                        </table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fifth"> zurück </button>
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#seventh"> weiter </button>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-collapse collapse" id="seventh">
                        <table style="width:900px" class="table table-bordered table-striped js-options-table">
                            <tr>
                                <td width="19%">
                                    Wie ist der Ressourcen-rahmen gestaltet?
                                </td>
                                <td width="27%">
                                    Für die studentische Forschung stehen keine zusätzlichen Ressourcen zur Verfügung.
                                <td width="27%">
                                    Für die studentische Forschung stehen befristet Ressourcen zur Verfügung.
                                </td>
                                <td width="27%">
                                    Für die studentische Forschung stehen längerfristig planbare Ressourcen zur Verfügung.
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="center">
                                    <input type="radio" name="inquiry" value="1">
                                </td>
                                <td align="center">
                                    <input type="radio" name="inquiry" value="2">
                                </td>
                                <td align="center">
                                    <input type="radio" name="inquiry" value="3">
                                </td>
                            </tr>
                        </table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
                        <button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#sixth"> zurück </button>
                        <button class="btn btn-primary" type="submit">senden</button>
                    </div>
                </div>
    </div> <!--complete form div -->
    </form>
    </div>
    </body>
<?php
?>