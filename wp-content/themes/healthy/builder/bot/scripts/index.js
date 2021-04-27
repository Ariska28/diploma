const TelegramBot = require('node-telegram-bot-api');
const mongoose = require('mongoose');
const config = require('./config');
const text = require('./text');
const helper = require('./helpers');
const kb = require('./keyboard-buttons');
const keyboard = require('./keyboard');
const database = require('../../database.json');

helper.logStart();

const bot = new TelegramBot(config.token, {
  polling: true
});


mongoose.connect(config.DB_URL, {
  useMongoClient: true
}).then(() => console.log('MongoDB connected')).catch((err => console.log(err)))

//создаём и подключаем модель
require('./models/reciept.model');
const Reciept = mongoose.model('reciepts');

//заполняем базу данных
//database.reciepts.forEach(f => new Reciept(f).save().catch(e=> console.log(e)))

app = {
  young: false,
  adult: false,
  elderly: false,

  slimming: false,
  sustentation: false,
  weight: false,

  vegan: false,
  meet: false,

  uId: 'uId is Empty',

  breakfast: false,
  dinner: false,
  supper: false,

  html: '',
}


///////
bot.onText(/\/start/, msg => {
  const textmessege = `Привет, ${msg.from.first_name}! \n${text.greeting}`;
  bot.sendMessage(helper.getChatId(msg), textmessege, {
    reply_markup: {
      keyboard: keyboard.start
    }
  })
})
////////

bot.on('message', msg => {
  const chatId = helper.getChatId(msg);
  const txt = msg.text;

  switch (txt) {
    case kb.start.yeas:
      bot.sendMessage(chatId, text.agreed, {
        reply_markup: {
          keyboard: keyboard.ages
        }
      })
      break

    case kb.start.no:
      bot.sendMessage(chatId, text.renouncement, {
        reply_markup: {
          remove_keyboard: true
        }
      })
      break

    case kb.back:
      bot.sendMessage(chatId, text.return, {
        reply_markup: {
          keyboard: keyboard.start
        }
      })
      break

    case kb.eat.breakfast:
      app.breakfast = true,
        app.dinner = false,
        app.supper = false,

        Iniq(chatId)
      break

    case kb.eat.dinner:
      app.breakfast = false,
        app.dinner = true,
        app.supper = false,

        Iniq(chatId)
      break


    case kb.eat.supper:
      app.breakfast = false,
        app.dinner = false,
        app.supper = true,

        Iniq(chatId)
      break


    case kb.eat.back:
      bot.sendMessage(chatId, app.html,{
        parse_mode: 'HTML'
      })
      break

      //case questions
    case kb.age.young:
      app.young = true;
      app.adult = false;
      app.elderly = false;
      bot.sendMessage(chatId, text.questionGoal, {
        reply_markup: {
          keyboard: keyboard.goals,
          one_time_keyboard: true
        }
      })
      break

    case kb.age.adult:
      app.young = false;
      app.adult = true;
      app.elderly = false;
      bot.sendMessage(chatId, text.questionGoal, {
        reply_markup: {
          keyboard: keyboard.goals,
          one_time_keyboard: true
        }
      })
      break

    case kb.age.elderly:
      app.young = false;
      app.adult = false;
      app.elderly = true;
      bot.sendMessage(chatId, text.questionGoal, {
        reply_markup: {
          keyboard: keyboard.goals,
          one_time_keyboard: true
        }
      })
      break

    case kb.goal.slimming:
      app.slimming = true;
      app.sustentation = false;
      app.weight = false;
      bot.sendMessage(chatId, text.questionType, {
        reply_markup: {
          keyboard: keyboard.types,
          one_time_keyboard: true
        }

      })
      break

    case kb.goal.sustentation:
      app.slimming = false;
      app.sustentation = true;
      app.weight = false;
      bot.sendMessage(chatId, text.questionType, {
        reply_markup: {
          keyboard: keyboard.types,
          one_time_keyboard: true
        }

      })
      break

    case kb.goal.weight:
      app.slimming = false;
      app.sustentation = false;
      app.weight = true;
      bot.sendMessage(chatId, text.questionType, {
        reply_markup: {
          keyboard: keyboard.types,
          one_time_keyboard: true
        }

      })
      break

    case kb.type.vegan:
      app.vegan = true;
      app.meet = false;
      bot.sendMessage(chatId, text.thanks, {})
      break

    case kb.type.meet:
      app.meet = true;
      app.vegan = false;
      bot.sendMessage(chatId, text.thanks, {})
      break

  }

  if (txt.toLowerCase() === "да") {
    conditions(chatId);

  }




  if (txt.toLowerCase() === "нет" || txt.toLowerCase() === "не") {
    bot.sendMessage(chatId, 'Очень жаль..', {
      reply_markup: {
        remove_keyboard: true
      }
    })
  }


});


bot.onText(/\/f(.+)/, (msg, [source, match]) => {
  app.uId = helper.getItemUuId(source);
  const chatId = helper.getChatId(msg);
  // console.log(app.uId);

  bot.sendMessage(chatId, text.choose, {
    reply_markup: {
      keyboard: keyboard.eating
    }
  })
})

function Iniq(chatId) {
  Reciept.findOne({
    uuid: app.uId
  }).then(reciept => {
    if (app.breakfast) {
      bot.sendPhoto(chatId, reciept.lanch.img, {
        caption: reciept.lanch.text,
      })
    }

    if (app.dinner) {
      bot.sendPhoto(chatId, reciept.dinner.img, {
        caption: reciept.dinner.text,
      })
    }

    if (app.supper) {
      bot.sendPhoto(chatId, reciept.supper.img, {
        caption: reciept.supper.text,
      })
    }
  })
}


//выборка нескольких данных
function sendReciepceByQuery(chatId, query) {
  Reciept.find(query).then(reciepts => {

    app.html = reciepts.map((f, i) => {
      return `<b>${i + 1}</b> - /f${f.uuid} \n${f.description} `
    }).join('\n')

    sendHTML(chatId, app.html, 'reciepts');
  })
}

//отправка HTML строк
function sendHTML(chatId, html) {
  const options = {
    parse_mode: 'HTML'
  }
  bot.sendMessage(chatId, html, options)
}


function conditions(chatId) {
  //yang
  if (app.vegan && app.slimming && app.young) {
    sendReciepceByQuery(chatId, {
      age: "молодой",
      goal: "снижение",
      category: "веган"
    })
  }

  if (app.vegan && app.sustentation && app.young) {
    sendReciepceByQuery(chatId, {
      age: "молодой",
      goal: "поддержка",
      category: "веган"
    })
  }

  if (app.vegan && app.weight && app.young) {
    sendReciepceByQuery(chatId, {
      age: "молодой",
      goal: "масса",
      category: "веган"
    })
  }

  if (app.meet && app.slimming && app.young) {
    sendReciepceByQuery(chatId, {
      age: "молодой",
      goal: "снижение",
      category: "норм"
    })
  }

  if (app.meet && app.sustentation && app.young) {
    sendReciepceByQuery(chatId, {
      age: "молодой",
      goal: "поддержка",
      category: "норм"
    })
  }

  if (app.meet && app.weight && app.young) {
    sendReciepceByQuery(chatId, {
      age: "молодой",
      goal: "масса",
      category: "норм"
    })
  }

  //adalt

  if (app.vegan && app.slimming && app.adult) {
    sendReciepceByQuery(chatId, {
      age: "средний",
      goal: "снижение",
      category: "веган"
    })
  }

  if (app.vegan && app.sustentation && app.adult) {
    sendReciepceByQuery(chatId, {
      age: "средний",
      goal: "поддержка",
      category: "веган"
    })
  }

  if (app.vegan && app.weight && app.adult) {
    sendReciepceByQuery(chatId, {
      age: "средний",
      goal: "масса",
      category: "веган"
    })
  }

  if (app.meet && app.slimming && app.adult) {
    sendReciepceByQuery(chatId, {
      age: "средний",
      goal: "снижение",
      category: "норм"
    })
  }

  if (app.meet && app.sustentation && app.adult) {
    sendReciepceByQuery(chatId, {
      age: "средний",
      goal: "поддержка",
      category: "норм"
    })
  }

  if (app.meet && app.weight && app.adult) {
    sendReciepceByQuery(chatId, {
      age: "средний",
      goal: "масса",
      category: "норм"
    })
  }


  //elderly

  if (app.vegan && app.slimming && app.elderly) {
    sendReciepceByQuery(chatId, {
      age: "приклонный",
      goal: "снижение",
      category: "веган"
    })
  }

  if (app.vegan && app.sustentation && app.elderly) {
    sendReciepceByQuery(chatId, {
      age: "приклонный",
      goal: "поддержка",
      category: "веган"
    })
  }

  if (app.vegan && app.weight && app.elderly) {
    sendReciepceByQuery(chatId, {
      age: "приклонный",
      goal: "масса",
      category: "веган"
    })
  }

  if (app.meet && app.slimming && app.elderly) {
    sendReciepceByQuery(chatId, {
      age: "приклонный",
      goal: "снижение",
      category: "норм"
    })
  }

  if (app.meet && app.sustentation && app.elderly) {
    sendReciepceByQuery(chatId, {
      age: "приклонный",
      goal: "поддержка",
      category: "норм"
    })
  }

  if (app.meet && app.weight && app.elderly) {
    sendReciepceByQuery(chatId, {
      age: "приклонный",
      goal: "масса",
      category: "норм"
    })
  }
}