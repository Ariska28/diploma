module.exports = {
    logStart() {
        console.log('Bot has start');
    },

    getChatId(msg) {
        return msg.chat.id;
    },

    
    getItemUuId(source) {
        return source.substr(2, source.length)
    }
}

