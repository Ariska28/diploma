const kb = require('./keyboard-buttons')

module.exports = {
    start: [
        [kb.start.yeas],
        [kb.start.no]
    ],
    ages: [
        [kb.age.young, kb.age.adult, kb.age.elderly],
        [kb.back]
    ],
    goals: [
        [kb.goal.slimming],
        [kb.goal.sustentation],
        [kb.goal.weight],
        [kb.back]
    ],

    types: [
        [kb.type.vegan, kb.type.meet],
        [kb.back]
    ],
    eating: [
        [kb.eat.breakfast, kb.eat.dinner, kb.eat.supper],
        [kb.eat.back,kb.back],
    ]
}