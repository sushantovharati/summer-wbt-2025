function submitForm() {
    var reasonOfContact = prompt("Reason of Contact:\n1) Projects\n2) Thesis\n3) Meeting\n4) Job ");
    reasonOfContact = reasonOfContact.toLowerCase();
    var selectedReason;
    if (reasonOfContact === "1" || reasonOfContact === "projects") {
        selectedReason = "Projects";
    } else if (reasonOfContact === "2" || reasonOfContact === "thesis") {
        selectedReason = "Thesis";
    } else if (reasonOfContact === "3" || reasonOfContact === "meeting") {
        selectedReason = "Meeting";
    } else if (reasonOfContact === "4" || reasonOfContact === "job") {
        selectedReason = "Job";
    }
    else {
        alert("Invalid Input");
        return;
    }
    if (reasonOfContact === "projects" || reasonOfContact === "thesis" || reasonOfContact === "meeting" ||
        reasonOfContact === "1" || reasonOfContact === "2" || reasonOfContact === "3") {
        var service = prompt("Service:\n1) Web Development\n2) C# Expert\n3) Java Expert ");
        service = service.toLowerCase();
        var selectedService;
        if (service === "1" || service === "web development") {
            selectedService = "Web Development";
        } else if (service === "2" || service === "c# expert") {
            selectedService = "C# Expert";
        } else if (service === "3" || service === "java expert") {
            selectedService = "Java Expert";
        }
        else {
            alert("Invalid Input");
            return;
        }
        if (service === "web development" || service === "c# expert" || service === "java expert" ||
            service === "1" || service === "2" || service === "3") {

            alert("Reason of Contact: " + selectedReason +
                "\nService: " + selectedService +
                "\nForm submitted successfully!");
        }

    } else if (reasonOfContact === "job" || reasonOfContact === "4") {
        var yourPosition = prompt("Select Your Position:\n1) CEO \n2) HR \n3) Employee");
        yourPosition = yourPosition.toLowerCase();
        var selectedPosition;
        if (yourPosition === "1" || yourPosition === "ceo") {
            selectedPosition = "CEO";
        } else if (yourPosition === "2" || yourPosition === "hr") {
            selectedPosition = "HR";
        } else if (yourPosition === "3" || yourPosition === "employee") {
            selectedPosition = "Employee";
        }
        else {
            alert("Invalid Input");
            return;
        }
        if (yourPosition === "ceo" || yourPosition === "hr" || yourPosition === "employee" || yourPosition === "1" || yourPosition === "2" || yourPosition === "3") {
            alert("Your Position: " + selectedPosition + "\nForm submitted successfully!");
        }
    }
    else {
        alert("Invalid Input");
    }
}
