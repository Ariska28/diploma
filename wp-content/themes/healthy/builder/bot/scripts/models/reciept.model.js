const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const RecieptSchema = new Schema({
    uuid: {
        type: String,
        required: true
    },
    age: {
        type: String,
        required: true
    },
    goal: {
        type: String,
        required: true
    },

    description: {
        type: String,
        required: true
    },
    picture: {
        type: String
    },

    lanch: {
        text: String,
        img: String
    },

    dinner: {
        text: String,
        img: String
    },

    supper: {
        text: String,
        img: String
    },
    

    category: {
        type: String,
        required: true
    },
})

mongoose.model('reciepts', RecieptSchema)