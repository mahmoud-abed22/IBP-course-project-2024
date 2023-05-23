@extends('components.indexUser')

@section('css')
<style>

li{
    color :#757575 ;
}
</style>
@stop

@section('main')
<h4 style="padding: 20px ; font-size: 22px; color: red; font-weight: 600; padding-left: 0;">Blood Donation Instructions </h4>

<section id="instructions">
        <div class="" style="padding-left:40px">
            <h5 style="color: #ff8080 ">Before Your Donation:</h5>
            <ul>
                <li>Avoid fatty foods, such as fried or greasy foods, on the day of donation.</li>
                <li>Get a good night's sleep and eat a healthy meal before your donation.</li>
                <li>Drink plenty of fluids, especially water, to stay hydrated.</li>
                <li>Wear comfortable clothing with sleeves that can be easily rolled up.</li>
                <li>Bring a valid identification document, such as a driver's license or passport.</li>
            </ul>

            <h5 style="color: #ff8080 ">On the Day of Donation:</h5>
            <ul>
                <li>Arrive on time for your appointment.</li>
                <li>Inform the staff if you have any health conditions or are taking any medications.</li>
                <li>Answer all the screening questions honestly and accurately.</li>
                <li>Undergo a brief medical examination, including checking your blood pressure, hemoglobin level, and
                    temperature.</li>
            </ul>

            <h5 style="color: #ff8080 ">After Your Donation:</h5>
            <ul>
                <li>Rest for a few minutes and have a snack or drink provided by the donation center.</li>
                <li>Avoid any strenuous physical activity or heavy lifting for the next 24 hours.</li>
                <li>Keep the bandage on your arm for at least four to six hours.</li>
                <li>Drink plenty of fluids and stay hydrated.</li>
            </ul>

            <p class="small" style="color :red ;">Please note that these instructions may vary depending on the donation center and country.
                It's
                always best to consult with the specific organization you plan to donate to for their guidelines.</p>
        </div>

    </section>
@stop