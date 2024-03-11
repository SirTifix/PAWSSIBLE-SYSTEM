// Function to display the selected date
function displaySelectedDate(dateElement, selectedDate) {
  dateElement.textContent = "Selected Date: " + selectedDate;
}

document.addEventListener("DOMContentLoaded", function () {
  // Get the pets dropdown menu
  let numberOfPets;
  const petsDropdown = document.getElementById("pets");

  // Add event listener to the pets dropdown menu
  petsDropdown.addEventListener("change", function () {
    console.log("Dropdown value changed");
    numberOfPets = parseInt(this.value);
    const petFormsContainer = document.getElementById("petFormsContainer");

    // Clear any existing pet info forms
    petFormsContainer.innerHTML = "";

    // Dynamically create and append pet info forms based on the selected number of pets
    for (let i = 1; i <= numberOfPets; i++) {
      const petForm = document.createElement("div");
      petForm.innerHTML = `
                <div class="pet-info-form background-color-container" container bg-light mt-4 p-4">
                  <h2 class="mb-4">Pet ${i} Information Form</h2>
                  <form>
                    <div class="form-row">
                      <div class="form-group col-sm-2  background-color">
                        <label for="petname"><h5>Pet Name</h5></label>
                        <input
                          type="text"
                          class="form-control"
                          id="petname"
                          placeholder="Enter pet name"
                        />
                      </div>
                      <div class="form-group col-sm-2 background-color">
                        <label for="pettype"> <h5>Pet Type</h5></label>
                        <input
                          type="text"
                          class="form-control"
                          id="pettype"
                          placeholder="Enter pet type"
                        />
                      </div>
                      <div class="form-group col-sm-2 background-color">
                        <label for="sex"> <h5>Sex</h5></label>
                        <input
                          type="text"
                          class="form-control background-color"
                          id="sex"
                          placeholder="Enter sex"
                        />
                      </div>

                      <div class="form-group col-sm-2">
                        <label for="concerns"> <h5>Concerns</h5></label>
                        <textarea style="height: 200px;" class="form-concerns" id="concerns"></textarea>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-sm-2 background-color">
                        <label for="breed"> <h5>Breed</h5></label>
                        <input
                          type="text"
                          class="form-control"
                          id="breed"
                          placeholder="Enter breed"
                        />
                      </div>
                      <div class="form-group col-sm-2">
                        <label for="services-${i}"> <h5>Select Services</h5></label>
                        <select class="form-control" id="services-${i}" name="services">
                        <option value="">Choose...</option>
                        </select>
                      </div>

                      <div class="form-group col-sm-2">
                      <label for="vet-${i}"><h5>Select vet</h5></label>
                      <select class="form-control" id="vet-${i}">
                          <option value="">Choose...</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-sm-2 background-color">
                        <label for="birthdate"> <h5>BirthDate</h5></label>
                        <input type="date" class="form-control" id="birthdate" />
                      </div>
                    </div>

                    <div class="select-ex-pet">
                      <button
                        type="submit"
                        class="btn"
                        style="background-color: #6075d1; float: right;"
                      >
                        Select Existing Pet
                      </button>
                    </div>
                  </form>
                </div>
            `;
            petFormsContainer.appendChild(petForm);
          }
          fetchServices(populateServicesDropdown);
          fetchVets(populateVetDropdown);
        });
      
        function fetchServices(callback) {
          console.log("Fetching services...");
          fetch('../customer/fetch-services.php')
            .then(response => {
              if (!response.ok) {
                throw new Error('Network response was not ok');
              }
              return response.json();
            })
            .then(data => {
              callback(data, numberOfPets);
            })
            .catch(error => console.error('Error fetching services:', error));
        }
      
        function populateServicesDropdown(services, numberOfPets) {
          for (let i = 1; i <= numberOfPets; i++) {
            const servicesSelect = document.getElementById(`services-${i}`);
            servicesSelect.innerHTML = "<option value=''>Choose...</option>";
            services.forEach(service => {
              servicesSelect.innerHTML += `<option value="${service.serviceID}">${service.service}</option>`;
            });
          }
        }

        function fetchVets(callback) {
          console.log("Fetching vets...");
          fetch('../customer/fetch-vet.php')
            .then(response => {
              if (!response.ok) {
                throw new Error('Network response was not ok');
              }
              return response.json();
            })
            .then(data => {
              callback(data, numberOfPets);
            })
            .catch(error => console.error('Error fetching vets:', error));
        }
      
        function populateVetDropdown(vetsData, numberOfPets) {
          for (let i = 1; i <= numberOfPets; i++) {
          const vetSelect = document.getElementById(`vet-${i}`);
          vetSelect.innerHTML = "<option value=''>Choose...</option>";
          vetsData.forEach(vet => {
            vetSelect.innerHTML += `<option value="${vet.vetID}">${vet.fullName}</option>`;
          });
        }
        }

  const prevMonthBtn = document.getElementById("prevMonthBtn");
  const nextMonthBtn = document.getElementById("nextMonthBtn");
  const currentMonthYear = document.getElementById("currentMonthYear");
  const calendarBody = document.getElementById("calendarBody");

  let currentDate = new Date();
  let currentMonth = currentDate.getMonth();
  let currentYear = currentDate.getFullYear();

  function generateCalendar(month, year) {
    currentMonthYear.textContent = `${getMonthName(month)} ${year}`;
    calendarBody.innerHTML = "";

    const firstDayOfMonth = new Date(year, month, 1).getDay();
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    for (let i = 0; i < firstDayOfMonth; i++) {
      const emptyCell = document.createElement("div");
      emptyCell.classList.add("calendar-cell");
      calendarBody.appendChild(emptyCell);
    }

    for (let i = 1; i <= daysInMonth; i++) {
      const calendarCell = document.createElement("div");
      calendarCell.classList.add("calendar-cell");
      calendarCell.textContent = i;

      calendarCell.addEventListener("click", () => {
        const selectedDate = new Date(year, month, i);
        const formattedDate = formatDate(selectedDate);
        alert(`You clicked on ${formattedDate}`);
      });

      const slotsText = document.createElement("div");
      slotsText.textContent = "10 slots";
      slotsText.classList.add("slots-text");
      calendarCell.appendChild(slotsText);

      calendarBody.appendChild(calendarCell);
    }
  }

  function getMonthName(month) {
    const months = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December",
    ];
    return months[month];
  }

  prevMonthBtn.addEventListener("click", () => {
    currentMonth--;
    if (currentMonth < 0) {
      currentMonth = 11;
      currentYear--;
    }
    generateCalendar(currentMonth, currentYear);
  });

  nextMonthBtn.addEventListener("click", () => {
    currentMonth++;
    if (currentMonth > 11) {
      currentMonth = 0;
      currentYear++;
    }
    generateCalendar(currentMonth, currentYear);
  });

  generateCalendar(currentMonth, currentYear);

  const timeSlots = document.querySelectorAll(".time-slot");

  timeSlots.forEach((timeSlot) => {
    timeSlot.addEventListener("click", () => {
      const selectedDateCell = document.querySelector(".calendar-cell.selected");
      if (selectedDateCell) {
        const selectedDate = new Date(currentYear, currentMonth, parseInt(selectedDateCell.textContent));
        const selectedTime = timeSlot.dataset.time; // Get the time from the data-time attribute
        openModal(selectedDate, selectedTime); // Call the openModal function
      } else {
        alert("Please select a date from the calendar first.");
      }
    });
  });

  calendarBody.addEventListener("click", (event) => {
    const selectedDate = document.querySelector(".calendar-cell.selected");
    if (selectedDate) {
      selectedDate.classList.remove("selected");
    }
    if (event.target.classList.contains("calendar-cell")) {
      event.target.classList.add("selected");
    }
  });

  function openModal(selectedDate, selectedTime) {
    const formattedDate = formatDate(selectedDate); // Format the selected date
    document.getElementById("selectedDateTime").textContent =
      "" +
      formattedDate +
      ", " +
      selectedTime;
    document.getElementById("selectedDate").value = formattedDate;
    document.getElementById("selectedTime").value = selectedTime;
  }

  function formatDate(date) {
    const options = { month: "long", day: "numeric", year: "numeric" };
    return date.toLocaleDateString("en-US", options);
  }
});

var modal = document.getElementById("registrationModal");

var btn = document.getElementById("registerBtn");

var span = document.getElementsByClassName("close")[0];


window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
