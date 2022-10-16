This is the backend service of our project

to get all appliances
GET 34.134.67.207/api/appliances

to receive recomendation
post 34.134.67.207/api/consumption
{
    "average_bill": 70,
    "country" :"us",
    "cost_per_kw":0.11,
    "is_solar_compatible":true,
    "appliances":[
        {"id":1, "count":2,"duration":6,"name":"Fluorescent Tube","wattage":40},
        {"id":6, "count":9,"duration":14,"name":"Fan Conventional","wattage":70}
    ]
}
