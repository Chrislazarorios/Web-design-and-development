// First, we pull out the information from the weather API
// To show our location, we need to get our longitude and latitude 

// We activate the EventListener on load
//<>
window.addEventListener('load', ()=>{
	// var and let are the same, except that var is function scoped and let is block scoped
	// longitude and latitude
	let long;
	let lat;
	// document.querySelector to get the html classes and save them in variables
	let temperatureDegree = document.querySelector('.temperature-degree');
	let temperatureDescription = document.querySelector('.temperature-description');
	let locationTimezone = document.querySelector('.location-timezone');
	let temperatureSection = document.querySelector('.degree-section');
	const temperatureSpan = document.querySelector('.degree-section span');

	if(navigator.geolocation)
	{
		navigator.geolocation.getCurrentPosition(position => {
			//console.log(position); //shows longitude and latitude in console.log
			long = position.coords.longitude;
			lat = position.coords.latitude;

			// we use the 'cors-anywhere' page to act as a proxy and be able to make any API request from localhost or any cross-browser
			const proxy = "https://cors-anywhere.herokuapp.com/";
			// Now we have obtained the coords, but to obtain the current temperature we need to pull out that info from an API
			// In this case, we use the darksky.net page to gather that information (darksky.net -> darksky API) (create account -> console -> sample API Call)
			// Copy the sample API Call, its formed by the webpage name, the code, the latitude(first coord) and the longitude(second coord) and save it in a const var
			// before using the API Call, replace the first and second coords with the lat and long variables previously created to get a custom weather API Call in our current position
			
			//const api = `$(proxy)https://api.darksky.net/forecast/53d16ca236486a174ded98690d79b395/37.8267,-122.4233`; 
			const api = `${proxy}https://api.darksky.net/forecast/53d16ca236486a174ded98690d79b395/${lat},${long}`;

			// we get the info from the API Call with fetch
			// get request from URL
			fetch(api) // only after the info arrives, then we execute the anonimous callback and convert the information to JSON so we can use it in JS
				.then(response => {
					return response.json();
				}) // after turning the api response into json, then we show the data(for now, just through console.log)
				.then(data => {
					console.log(data); // However, we'll get an error, because we are trying to call the API from localhost, and we can't get information through cross-browsers
					// Once we make the proxy work, we get all the data the darksky weather API has to offer
					// From the data the API brought, we take two things from the 'currently' section, the temperature and summary
					// to avoid writing 'data.currently.temperature' and 'data.currently.summary' we just create two const variables and save the 'currently' data inside them
					const {temperature, summary, icon} = data.currently;
					// Set DOM Elements from the API
					// With this, we replace the default html content with current data from the weather API
					temperatureDegree.textContent = temperature;
					temperatureDescription.textContent = summary;
					locationTimezone.textContent = data.timezone;
					// here we invoke the function to set the icon
					setIcons(icon, document.querySelector(".icon"))

					//Formula to change Celsius/Farenheit
					let celsius = (temperature - 32) * (5/9);
					//Change temperature from Celsius to Farenheit and vice versa
					temperatureSection.addEventListener('click', ()=>{
						if(temperatureSpan.textContent === "F")
						{
							temperatureSpan.textContent = "C";
							temperatureDegree.textContent = Math.floor(celsius);
						}
						else
						{
							temperatureSpan.textContent = "F";
							temperatureDegree.textContent = temperature;
						}
					})
					
				}); // So, we need a PROXY so we can call the darksky weather API or any other API request from localhost. We'll use 'cors-anywhere' to act as a proxy
		});

	}
	else
	{
		h1.textContent = "hey you didnt allow location";
	}

	// Instructions to set icons on skycons page
	function setIcons(icon, iconID){
		const skycons = new Skycons({color:"white"});
		// We get the current icon from the darksky weather API, from the 'currently' section
		// Besides that, the way the name of the icon in the 'currently' section is named, and the way the icon is named in skycons is named is different
		// in darkSky, the icon's name has middle scores in it ('-'), while in skycons the icon name is written using underscores('_')
		// that's why, in the currentIcon var, we REPLACE every middle score in the name with underscores, so the icon is named exactly the way is named in the SKYCONS canvas
		// additionally, the icons in skycons canvas is completely writen in uppercase, so we add the '.toUpperCase();' at the end
		const currentIcon = icon.replace(/-/g, "_").toUpperCase();
		// to initiate the animation we use '.play()'
		skycons.play();
		// we set the iconID and the current icon, and return it
		return skycons.set(iconID, Skycons[currentIcon])
	}
});