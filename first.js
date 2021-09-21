let phrase = '';
for (let i = 1; i < 100; i++) {
    if (i % 3 === 0)
        phrase += 'Fizz';

    if (i % 5 === 0)
        phrase += 'Buzz';

    if (phrase.length > 1)
        console.log(`${i} -> ${phrase}`);
    phrase = '';
}