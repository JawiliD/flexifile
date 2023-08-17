<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>title</title>
</head>
<body>
<div class="layout">
    <?php
    // require 'config';
    include 'header.php';
    include 'sidebar-program-head.php';   
    ?>
    </div>
    <div class="content">
        <!-- start coding here -->
        <?php
            include 'dashboard.php';
        ?>
    </div>
    <div class="vw-90 ms-3 me-3 p-3 mt-4 rounded first-div container-div1 container-adjust position-relative">
            <h1>Academic Year/Semester</h1>
            <hr class="hr"/>
            
            <button type="button" class="btn btn-secondary btn-lg btn-modal5 py-2 " data-bs-toggle="modal" data-bs-target="#exampleModal">
                        SET
            </button>
            <div class="position-absolute ms-3 p-3 set-div rounded ">
            <h5 class="text-black">Academic Semester History Log</h5>
            <hr class="hr"/>
            </div>
            <div class="modal fade" id="exampleModal"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">SET</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <div class="row align-items-start mt-2">
                                        <div class="col">
                                        <div class="input-group input-group-sm mb-3">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Title:</span>
                                                <input type="text" class="form-control">
                                                                
                                        </div>
                                        <h5>Date</h5>
                                        <div class="input-group input-group-sm mb-3">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">From:</span>
                                                <input type="text" class="form-control">
                                                <span class="mx-2"></span>
                                                <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                                <input type="text" class="form-control">
                                                                
                                        </div>
                                        </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" >Save</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            </div>
                            </div>
                            </div>
                            </div>
                            <div class="contianer-calendar position-absolute mt-5 ">
                            <div class="calendar">
                                <div class="calendar-header bg-secondary">
                                <span class="month-picker" id="month-picker"> May </span>
                                <div class="year-picker" id="year-picker">
                                    <span class="year-change" id="pre-year">
                                    <pre><</pre>
                                    </span>
                                    <span id="year">2020 </span>
                                    <span class="year-change" id="next-year">
                                    <pre>></pre>
                                    </span>
                                </div>
                                </div>
                        
                                <div class="calendar-body">
                                <div class="calendar-week-days">
                                    <div>Sun</div>
                                    <div>Mon</div>
                                    <div>Tue</div>
                                    <div>Wed</div>
                                    <div>Thu</div>
                                    <div>Fri</div>
                                    <div>Sat</div>
                                </div>
                                <div class="calendar-days">
                                </div>
                                </div>
                                <div class="calendar-footer">
                                </div>
                                <div class="date-time-formate">
                                <div class="day-text-formate">TODAY</div>
                                <div class="date-time-value">
                                    <div class="time-formate">02:51:20</div>
                                    <div class="date-formate">23 - july - 2022</div>
                                </div>
                                </div>
                                <div class="month-list"></div>
                            </div>
                            </div>
                            
                            <script>
                            const isLeapYear = (year) => {
                            return (
                            (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) ||
                            (year % 100 === 0 && year % 400 === 0)
                            );
                        };
                        const getFebDays = (year) => {
                            return isLeapYear(year) ? 29 : 28;
                        };
                        let calendar = document.querySelector('.calendar');
                        const month_names = [
                            'January',
                            'February',
                            'March',
                            'April',
                            'May',
                            'June',
                            'July',
                            'August',
                            'September',
                            'October',
                            'November',
                            'December',
                        ];
                        let month_picker = document.querySelector('#month-picker');
                        const dayTextFormate = document.querySelector('.day-text-formate');
                        const timeFormate = document.querySelector('.time-formate');
                        const dateFormate = document.querySelector('.date-formate');
                        
                        month_picker.onclick = () => {
                            month_list.classList.remove('hideonce');
                            month_list.classList.remove('hide');
                            month_list.classList.add('show');
                            dayTextFormate.classList.remove('showtime');
                            dayTextFormate.classList.add('hidetime');
                            timeFormate.classList.remove('showtime');
                            timeFormate.classList.add('hideTime');
                            dateFormate.classList.remove('showtime');
                            dateFormate.classList.add('hideTime');
                        };
                        
                        const generateCalendar = (month, year) => {
                            let calendar_days = document.querySelector('.calendar-days');
                            calendar_days.innerHTML = '';
                            let calendar_header_year = document.querySelector('#year');
                            let days_of_month = [
                            31,
                            getFebDays(year),
                            31,
                            30,
                            31,
                            30,
                            31,
                            31,
                            30,
                            31,
                            30,
                            31,
                            ];
                            
                            let currentDate = new Date();
                            
                            month_picker.innerHTML = month_names[month];
                            
                            calendar_header_year.innerHTML = year;
                            
                            let first_day = new Date(year, month);
                        
                        
                        for (let i = 0; i <= days_of_month[month] + first_day.getDay() - 1; i++) {
                        
                            let day = document.createElement('div');
                        
                            if (i >= first_day.getDay()) {
                                day.innerHTML = i - first_day.getDay() + 1;

                                if (i - first_day.getDay() + 1 === currentDate.getDate() &&
                                year === currentDate.getFullYear() &&
                                month === currentDate.getMonth()
                                ) {
                                day.classList.add('current-date');
                                }
                            }
                            calendar_days.appendChild(day);
                            }
                        };
                        
                        let month_list = calendar.querySelector('.month-list');
                        month_names.forEach((e, index) => {
                            let month = document.createElement('div');
                            month.innerHTML = `<div>${e}</div>`;
                        
                            month_list.append(month);
                            month.onclick = () => {
                            currentMonth.value = index;
                            generateCalendar(currentMonth.value, currentYear.value);
                            month_list.classList.replace('show', 'hide');
                            dayTextFormate.classList.remove('hideTime');
                            dayTextFormate.classList.add('showtime');
                            timeFormate.classList.remove('hideTime');
                            timeFormate.classList.add('showtime');
                            dateFormate.classList.remove('hideTime');
                            dateFormate.classList.add('showtime');
                            };
                        });
                        
                        (function () {
                            month_list.classList.add('hideonce');
                        })();
                        document.querySelector('#pre-year').onclick = () => {
                            --currentYear.value;
                            generateCalendar(currentMonth.value, currentYear.value);
                        };
                        document.querySelector('#next-year').onclick = () => {
                            ++currentYear.value;
                            generateCalendar(currentMonth.value, currentYear.value);
                        };
                        
                        let currentDate = new Date();
                        let currentMonth = { value: currentDate.getMonth() };
                        let currentYear = { value: currentDate.getFullYear() };
                        generateCalendar(currentMonth.value, currentYear.value);

                        const todayShowTime = document.querySelector('.time-formate');
                        const todayShowDate = document.querySelector('.date-formate');
                        
                        const currshowDate = new Date();
                        const showCurrentDateOption = {
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric',
                            weekday: 'long',
                        };
                        const currentDateFormate = new Intl.DateTimeFormat(
                            'en-US',
                            showCurrentDateOption
                        ).format(currshowDate);
                        todayShowDate.textContent = currentDateFormate;
                        setInterval(() => {
                            const timer = new Date();
                            const option = {
                            hour: 'numeric',
                            minute: 'numeric',
                            second: 'numeric',
                            };
                            const formateTimer = new Intl.DateTimeFormat('en-us', option).format(timer);
                            let time = `${`${timer.getHours()}`.padStart(
                            2,
                            '0'
                            )}:${`${timer.getMinutes()}`.padStart(
                            2,
                            '0'
                            )}: ${`${timer.getSeconds()}`.padStart(2, '0')}`;
                            todayShowTime.textContent = formateTimer;
                        }, 1000);
                        

                            </script>
                            
                            

    </div>


    





</body>
</html>
