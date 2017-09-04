/**
 * Created by fides-WHK on 16.03.2017.
 */

function cleanall(){
    let idclass = document.getElementsByClassName("dia");
    for (let i=0;i<idclass.length;i++) {
        idclass[i].innerHTML = '';
    }
    return false;
}
function setKriterien() {

    if (location.pathname.match('mikrodisplayeng') !== null) {
        return ["Assessment", "research topic", "research question", "scheduling", "conduct", "relfection", "results"];
    } else if (location.pathname.match('mikrodisplayger') !== null) {
        return ["Assessment", "Forschungsthema", "Forschungsfrage", "Planung", "Durchführung", "Reflexion", "Ergebnisdarstellung"];
    } else if (location.pathname.match('mesodisplayeng') !== null) {
        return ["curric. embedding", "modular location", "content", "assessement", "recourses", "time"];
    } else if (location.pathname.match('mesodisplayger') !== null) {
        return ["Curric. Einbindung", "Modulare Verortung", "Inhaltsrahmen", "Prüfungsrahmen", "Ressourcenrahmen", "Zeitrahmen"];
    }
}

function seturl(mikro, Filter){
    let tempurl="serviceout.php";
    if (mikro) {
        tempurl = tempurl + "?mikro=true";
    }
    else {
        tempurl = tempurl + "?mikro=false";
    }
    for (let i=0; i<Filter.length; i++){
        if (i%2===0){
            tempurl = tempurl + "&" + Filter[i];
        }
        else tempurl = tempurl + "=" + Filter[i];
    }
    return tempurl;
}
let number_of_showall_mikro;
let number_of_showall_meso;
function showResults(Filter) {
    document.getElementById('nextmikro').disabled=true;
    document.getElementById('previousmikro').disabled=true;
    document.getElementById('nextmeso').disabled=true;
    document.getElementById('previousmeso').disabled=true;
    document.getElementById('labels0').hidden=true;
    document.getElementById('labels1').hidden=true;
    cleanall();
    number_of_showall_mikro=0;
    number_of_showall_meso=0;
    let values = [];
    let Kriterienmikro=[];
    let Kriterienmeso =[];
    let urlmikro = "";
    let urlmeso = "";
    if (Filter.length===4){
        if (location.pathname.match('eng') !== null) {
            Kriterienmikro=["Assessment", "research topic", "research question", "scheduling", "conduct", "relfection", "results"];
            urlmikro = "serviceout.php?mikro=true&id="+Filter[1]+"&anyway=1"+"&from=0";
            Kriterienmeso =["curric. embedding", "modular location", "content", "assessement", "recourses", "time"];
            urlmeso = "serviceout.php?mikro=false&id="+Filter[3]+"&anyway=1"+"&from=0";
        }
        if (location.pathname.match('ger') !== null) {
            Kriterienmikro=["Assessment", "Forschungsthema", "Forschungsfrage", "Planung", "Durchführung", "Reflexion", "Ergebnisdarstellung"];
            urlmikro = "serviceout.php?mikro=true&id="+Filter[1]+"&anyway=1"+"&from=0";
            Kriterienmeso =["Curric. Einbindung", "Modulare Verortung", "Inhaltsrahmen", "Prüfungsrahmen", "Ressourcenrahmen", "Zeitrahmen"];
            urlmeso = "serviceout.php?mikro=false&id="+Filter[3]+"&anyway=1"+"&from=0";
        }
    }
    else if (Filter.length===0){
        return false;
    }
    else if (Filter[0].match('mikro')!==null){
        if (location.pathname.match('eng') !== null) {
            Kriterienmikro = ["Assessment", "research topic", "research question", "scheduling", "conduct", "relfection", "results"];
            urlmikro = "serviceout.php?mikro=true&id="+Filter[1]+"&anyway=1"+"&from=0";
        }else {
            Kriterienmikro=["Assessment", "Forschungsthema", "Forschungsfrage", "Planung", "Durchführung", "Reflexion", "Ergebnisdarstellung"];
            urlmikro = "serviceout.php?mikro=true&id="+Filter[1]+"&anyway=1"+"&from=0";
        }
    }else {
        if (location.pathname.match('eng') !== null) {
            Kriterienmeso =["curric. embedding", "modular location", "content", "assessement", "recourses", "time"];
            urlmeso = "serviceout.php?mikro=false&id="+Filter[1]+"&anyway=1"+"&from=0";
        }else {
            Kriterienmeso =["Curric. Einbindung", "Modulare Verortung", "Inhaltsrahmen", "Prüfungsrahmen", "Ressourcenrahmen", "Zeitrahmen"];
            urlmeso = "serviceout.php?mikro=false&id="+Filter[1]+"&anyway=1"+"&from=0";
        }
    }
    if (urlmikro!==""){
        $.ajax({
            url: urlmikro,
            success: function (data) {
                values = [data[0].Assessment, data[0].Forschungsthema, data[0].Forschungsfrage, data[0].Planung, data[0].Durchfuhrung, data[0].Reflexion, data[0].Ergebnisdarstellung];
                diagram(Kriterienmikro, values,0);
                number_of_showall_mikro++;
                document.getElementById('Unilabel0').innerHTML=data[0].Uni;
                document.getElementById('Kurslabel0').innerHTML=data[0].Kurs;
                document.getElementById('Fachbereichlabel0').innerHTML=data[0].Fachbereich;
                document.getElementById('Semesterzahllabel0').innerHTML=data[0].Semesterzahl;
                document.getElementById('AnzahlStudentenlabel0').innerHTML=data[0].AnzahlStudenten;
            },
            async: false
        });
        document.getElementById('labels0').hidden=false;
    }
    if (urlmeso!==""){
        $.ajax({
            url: urlmeso,
            success: function (data) {
                values = [data[0].Einbindung, data[0].Verortung, data[0].Inhaltsrahmen, data[0].Prufungsrahmen, data[0].Ressourcenrahmen, data[0].Zeitrahmen];
                diagram(Kriterienmeso, values,1);
                number_of_showall_meso++;
                document.getElementById('Unilabel1').innerHTML=data[0].Uni;
                document.getElementById('Kurslabel1').innerHTML=data[0].Kurs;
                document.getElementById('Fachbereichlabel1').innerHTML=data[0].Fachbereich;
                document.getElementById('Semesterzahllabel1').innerHTML=data[0].Semesterzahl;
                document.getElementById('AnzahlStudentenlabel1').innerHTML=data[0].AnzahlStudenten;
            },
            async: false
        });
        document.getElementById('labels1').hidden=false;
    }
}

function showall(Filter,mikro) {
    if (mikro){
        document.getElementById('nextmikro').disabled=false;
        document.getElementById('previousmikro').disabled=true;
    }
    else {
        document.getElementById('nextmeso').disabled=false;
        document.getElementById('previousmeso').disabled=true;
    }
    document.getElementById('labels0').hidden=true;
    document.getElementById('labels1').hidden=true;
    cleanall();
    if (mikro) number_of_showall_mikro=0;
    else number_of_showall_meso=0;
    let values = [];
    let Kriterien=setKriterien();
    let url=seturl(mikro,Filter);
    if (mikro) url=url + "&from="+String(number_of_showall_mikro);
    else url=url + "&from="+String(number_of_showall_meso);
        $.ajax({
            url: url,
            mikro: mikro,
            success: function (data) {
                for (let i=data.length-1; i>=0; i--) {
                    if (mikro){
                        values = [data[i].Assessment, data[i].Forschungsthema, data[i].Forschungsfrage, data[i].Planung, data[i].Durchfuhrung, data[i].Reflexion, data[i].Ergebnisdarstellung];
                        diagram(Kriterien, values,0);
                        number_of_showall_mikro++;
                        document.getElementById('Unilabel0').innerHTML=data[i].Uni;
                        document.getElementById('Kurslabel0').innerHTML=data[i].Kurs;
                        document.getElementById('Fachbereichlabel0').innerHTML=data[i].Fachbereich;
                        document.getElementById('Semesterzahllabel0').innerHTML=data[i].Semesterzahl;
                        document.getElementById('AnzahlStudentenlabel0').innerHTML=data[i].AnzahlStudenten;
                    } else {
                        values = [data[i].Einbindung, data[i].Verortung, data[i].Inhaltsrahmen, data[i].Prufungsrahmen, data[i].Ressourcenrahmen, data[i].Zeitrahmen];
                        diagram(Kriterien, values,1);
                        number_of_showall_meso++;
                        document.getElementById('Unilabel1').innerHTML=data[i].Uni;
                        document.getElementById('Kurslabel1').innerHTML=data[i].Kurs;
                        document.getElementById('Fachbereichlabel1').innerHTML=data[i].Fachbereich;
                        document.getElementById('Semesterzahllabel1').innerHTML=data[i].Semesterzahl;
                        document.getElementById('AnzahlStudentenlabel1').innerHTML=data[i].AnzahlStudenten;
                    }
                }
            },
            async: false
        });
    if (number_of_showall_mikro >= 1) {
        document.getElementById('labels0').hidden = false;
    }
    if (number_of_showall_meso>=1){
        document.getElementById('labels1').hidden=false;
    }
}
function next(Filter,mikro) {
    if (mikro) document.getElementById('previousmikro').disabled=false;
    else document.getElementById('previousmeso').disabled=false;
    document.getElementById('labels0').hidden=true;
    document.getElementById('labels1').hidden=true;
    let values = [];
    let Kriterien = setKriterien();
    let url = seturl(mikro, Filter);
    if (mikro) url = url + "&from=" + String(number_of_showall_mikro);
    else url = url + "&from=" + String(number_of_showall_meso);
    $.ajax({
        url: url,
        success: function (data) {
            if (data.length !== 0) {
                cleanall();
                for (let i = data.length - 1; i >= 0; i--) {
                    if (mikro) {
                        values = [data[i].Assessment, data[i].Forschungsthema, data[i].Forschungsfrage, data[i].Planung, data[i].Durchfuhrung, data[i].Reflexion, data[i].Ergebnisdarstellung];
                        diagram(Kriterien, values, 0);
                        number_of_showall_mikro++;
                        document.getElementById('Unilabel0').innerHTML = data[i].Uni;
                        document.getElementById('Kurslabel0').innerHTML = data[i].Kurs;
                        document.getElementById('Fachbereichlabel0').innerHTML = data[i].Fachbereich;
                        document.getElementById('Semesterzahllabel0').innerHTML = data[i].Semesterzahl;
                        document.getElementById('AnzahlStudentenlabel0').innerHTML = data[i].AnzahlStudenten;
                    } else {
                        values = [data[i].Einbindung, data[i].Verortung, data[i].Inhaltsrahmen, data[i].Prufungsrahmen, data[i].Ressourcenrahmen, data[i].Zeitrahmen];
                        diagram(Kriterien, values, 1);
                        number_of_showall_meso++;
                        document.getElementById('Unilabel1').innerHTML = data[i].Uni;
                        document.getElementById('Kurslabel1').innerHTML = data[i].Kurs;
                        document.getElementById('Fachbereichlabel1').innerHTML = data[i].Fachbereich;
                        document.getElementById('Semesterzahllabel1').innerHTML = data[i].Semesterzahl;
                        document.getElementById('AnzahlStudentenlabel1').innerHTML = data[i].AnzahlStudenten;
                    }
                }
            } else
                if (mikro) document.getElementById('nextmikro').disabled=true;
                else document.getElementById('nextmeso').disabled=true;


        },
        async: false
    });
    if (number_of_showall_mikro >= 1) {
        document.getElementById('labels0').hidden = false;
    }
    if (number_of_showall_meso>=1){
        document.getElementById('labels1').hidden=false;
    }
}

function previous(Filter,mikro) {
    if (mikro) document.getElementById('nextmikro').disabled=false;
    else document.getElementById('nextmeso').disabled=false;
    if ((mikro) && (number_of_showall_mikro<=1)) {
        document.getElementById('previousmikro').disabled=true;
        return false;
    }
    if ((!mikro) && (number_of_showall_meso<=1)) {
        document.getElementById('previousmeso').disabled=true;
        return false;
    }
    if (mikro) number_of_showall_mikro--;
    else number_of_showall_meso--;
    cleanall();
    let values = [];
    let Kriterien=setKriterien();
    let url=seturl(mikro,Filter);
    if (mikro) url=url + "&from="+String(number_of_showall_mikro-1);
    else url=url + "&from="+String(number_of_showall_meso-1);
    $.ajax({
        url: url,
        success: function (data) {
            for (let i=data.length-1; i>=0; i--) {
                if (mikro){
                    values = [data[i].Assessment, data[i].Forschungsthema, data[i].Forschungsfrage, data[i].Planung, data[i].Durchfuhrung, data[i].Reflexion, data[i].Ergebnisdarstellung];
                    diagram(Kriterien, values,0);
                    document.getElementById('Unilabel0').innerHTML=data[i].Uni;
                    document.getElementById('Kurslabel0').innerHTML=data[i].Kurs;
                    document.getElementById('Fachbereichlabel0').innerHTML=data[i].Fachbereich;
                    document.getElementById('Semesterzahllabel0').innerHTML=data[i].Semesterzahl;
                    document.getElementById('AnzahlStudentenlabel0').innerHTML=data[i].AnzahlStudenten;
                } else {
                    values = [data[i].Einbindung, data[i].Verortung, data[i].Inhaltsrahmen, data[i].Prufungsrahmen, data[i].Ressourcenrahmen, data[i].Zeitrahmen];
                    diagram(Kriterien, values,1);
                    document.getElementById('Unilabel1').innerHTML=data[i].Uni;
                    document.getElementById('Kurslabel1').innerHTML=data[i].Kurs;
                    document.getElementById('Fachbereichlabel1').innerHTML=data[i].Fachbereich;
                    document.getElementById('Semesterzahllabel1').innerHTML=data[i].Semesterzahl;
                    document.getElementById('AnzahlStudentenlabel1').innerHTML=data[i].AnzahlStudenten;
                }
            }
        },
        async: false
    });
    if (number_of_showall_mikro >= 1) {
        document.getElementById('labels0').hidden = false;
    }
    if (number_of_showall_meso>=1){
        document.getElementById('labels1').hidden=false;
    }
}
function cleanFilter() {
    let inputs = document.getElementsByClassName("idclass");
    for (let i=0;i<inputs.length;i++){
        inputs[i].value="";
    }
    inputs = document.getElementsByClassName("stringFilter");
    for (let i=0;i<inputs.length;i++){
        inputs[i].value="";
    }
    inputs = document.getElementsByClassName("dimensionFilter");
    for (let i=0;i<inputs.length;i++){
        inputs[i].checked=false;
    }
}
