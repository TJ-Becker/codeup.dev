'use strict';

var student = {
    awesomeGrade: 80,
    name: null,
    subjects: [],

    calculateAverage: function () {
        var average = 0;
        this.subjects.forEach(function (subject) {
            average += Number(subject.grade);
        });
        return (average / this.subjects.length);
    },
    addSubject: function (name, grade) {
        var subject = {
            name: name,
            grade: grade
        };
        this.subjects.push(subject);
    },
    isAwesome: function () {
        return this.calculateAverage() > this.awesomeGrade;
    }
}

function saveName() {
    document.getElementById("add-grade").removeAttribute("disabled");
    document.getElementById("calculate-average").removeAttribute("disabled");
    var name = document.getElementById("name").value
    document.getElementById("student-name").innerHTML = name;
    student.name = name;
}

function addSubject() {
    var subject = document.getElementById("subject").value
    var grade = document.getElementById("grade").value
    student.addSubject(subject, grade);

    var table = document.getElementById("grades").innerHTML;
    table = "<tr><td>" + subject + "</td><td>" + grade + "</td></tr>" + table
    console.log(table);
    document.getElementById("grades").innerHTML = table;
}

function addAverage() {
    var subject = document.getElementById("subject").value
    var grade = document.getElementById("grade").value
    student.addSubject(subject, grade);

    var table = document.getElementById("grades").innerHTML;
    table = "<tr><td>" + subject + "</td><td>" + grade + "</td></tr>" + table
    console.log(table);
    document.getElementById("grades").innerHTML = table;

    var average = document.getElementById("student-average");
    average.innerHTML = student.calculateAverage();
    console.log(student.isAwesome());
    if (student.isAwesome() == true) {
        document.getElementById("student-awesome").removeAttribute("class");
    } else {
        document.getElementById("student-practice").removeAttribute("class");
    }
}

var save = document.getElementById("save-name");
save.addEventListener('click', saveName, false);
var addAndContinue = document.getElementById("add-grade");
addAndContinue.addEventListener('click', addSubject, false);
var addAndCalculateAverage = document.getElementById("calculate-average");
addAndCalculateAverage.addEventListener('click', addAverage, false);