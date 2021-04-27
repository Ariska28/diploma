const kb = require('./keyboard-buttons')

module.exports = {
    home: [
        [kb.home.films, kb.home.cinemas],
        [kb.home.favourite]
    ],
    films: [
        [kb.film.rendom],
        [kb.film.action, kb.film.comedy],
        [kb.back]
    ],
}