const data = [
    {
        "page": 1,
        "totalPages": 5,
        "data": [
            {
                "titla": "Movie 1",
                "rating": 4.7
            },
            {
                "titla": "Movie 1",
                "rating": 7.7
            }
        ]
    },
    {
        "page": 2,
        "totalPages": 5,
        "data": [
            {
                "titla": "Movie 1",
                "rating": 4.7
            },
            {
                "titla": "Movie 1",
                "rating": 4.7
            }
        ]
    }
]


let avarage = 0;
let totalOfRatings = 0;
let maximum = Number.MIN_VALUE;

data.forEach(page => {
    totalOfRatings += page.data.length;
    page.data.forEach(movie => {
        avarage += movie.rating;

        if (movie.rating > maximum) {
            maximum = movie.rating;
        }
    })

})
avarage = avarage / totalOfRatings;
console.log(`Avarage: ${avarage}`);
console.log(`Maximum value: ${maximum}`);