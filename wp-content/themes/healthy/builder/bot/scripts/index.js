const TelegramBot = require('node-telegram-bot-api');
const mongoose = require('mongoose');
const config = require('./config');
const helper = require('./helpers');
const kb = require('./keyboard-buttons');
const keyboard = require('./keyboard');
const database = require('../../database.json');

helper.logStart();

const bot = new TelegramBot(config.token, {
  polling: true
});

//соединяемся с бд
mongoose.connect(config.DB_URL, {
    useMongoClient: true
  }).then(() => console.log('MongoDB connected')).catch((err => console.log(err)))

//создаём и подключаем модель
require('./models/film.model');
const Film = mongoose.model('films');

//заполняем базу данных
// database.films.forEach(f=> new Film(f).save().catch(e=> console.log(e)))


//обработка сообщений, которые получил бот
bot.on('message', msg => {
  const chatId = helper.getChatId(msg);
  switch (msg.text) {
    case kb.home.favourite:
      break

    case kb.home.films:
      bot.sendMessage(chatId, `Выберите жанр: `, {
        reply_markup: {
          keyboard: keyboard.films
        }
      })
      break

    case kb.film.comedy:
      sendFilmsByQuery(chatId, {
        type: 'comedy'
      });
      break

    case kb.film.action:
      sendFilmsByQuery(chatId, {
        type: 'action'
      });
      break

    case kb.film.rendom:
      sendFilmsByQuery(chatId, {});
      break

    case kb.home.cinemas:
      break

    case kb.back:
      bot.sendMessage(chatId, `Что хотите посмотреть?`, {
        reply_markup: {
          keyboard: keyboard.home
        }
      })
      break
  }
});


//обработка ссылок на данный фильм (отделеление нужной ссылки)
bot.onText(/\/f(.+)/, (msg, [source, match]) => {
  const filmUuid = helper.getItemUuId(source);
  const chatId = helper.getChatId(msg);
  console.log(filmUuid);

  Film.findOne({ uuid: filmUuid }).then( film => {
    const caption = `Название: ${film.name}\nГод: ${film.year}`
    bot.sendPhoto(chatId, film.picture, {
      caption: caption,
      reply_markup: {
        inline_keyboard: [
          [
            {
              text: 'Добавить в избранное',
              callback_data: 'ашдь'
            },
            {
              text: 'Показать кинотеатры',
              callback_data: 'цвы'
            }
          ],

          [
            {
              text: `Кинопоиск ${film.name}`,
              url : 'https://github.com/yagop/node-telegram-bot-api/issues/787'

            }
          ]
        ]
      }
    } )
  })
})

//обработка первого события: //start
bot.onText(/\/start/, msg => {
  const text = `Привет, ${msg.from.first_name}!`;
  bot.sendMessage(helper.getChatId(msg), text, {
    reply_markup: {
      keyboard: keyboard.home
    }
  })
})




//--------------------------------

//выборка нескольких данных
function sendFilmsByQuery(chatId, query) {
  Film.find(query).then(films => {
    // console.log(films);

    const html = films.map((f, i) => {
      return `<b>${i + 1}</b> ${f.name} - /f${f.uuid}`
    }).join('\n')

    sendHTML(chatId, html, 'films');
  })
}

//отправка HTML строк
function sendHTML(chatId, html, kbName = null) {
  const options = {
    parse_mode: 'HTML'
  }

  if (kbName) {
    options['reply_markup'] = {
      keyboard: keyboard[kbName]
    }
  }

  bot.sendMessage(chatId, html, options)

}

//console.log(ошибка)
// bot.on("polling_error", console.log);

//-------------------------------


//отправка картинок и подписи
// bot.onText(/\/test/, (msg, [source, match]) => {
//     const chatId = msg.chat.id;

//     bot.sendPhoto(chatId,'./bot_img/meet.png', {
//        caption: 'Это колбаса. Её кушать ненужно' 
//     } )
// })

//отправка видео
// bot.onText(/\/video/, msg => {
//     const chatId = msg.chat.id;

//     bot.sendMessage(chatId, 'Я отправляю вам видео...');
//     bot.sendVideo(chatId, "https://dump.video/i/nGZsAH.mp4", {
//         caption: 'Видео, где собачке чешут ушко'
//     })
// })

//отправка контакта(телефон)
// bot.onText(/\/get_contact/, msg => {
//     const chatId = msg.chat.id;
//     bot.sendContact(chatId, "375256552274", 'Карманыш', {

//     })
// })


// bot.on('message', (msg) => {
//     const {
//         id
//     } = msg.chat;

//     if (msg.text.toLowerCase() === "привет") {
//         bot.sendMessage(id, `Привет, ${msg.from.first_name}!`);
//     }

//     if (msg.text === 'Закрыть') {
//         bot.sendMessage(id, 'Закрыть клавиатуру', {
//             reply_markup: {
//                 remove_keyboard: true
//             }
//         })
//     } else if (msg.text === 'Ответить') {

//         bot.sendMessage(id, 'Отвечаю', {
//             reply_markup: {
//                 force_reply: true
//             }
//         })
//     }

//     if (msg.text.toLowerCase() === "клавиатура") {
//         bot.sendMessage(id, 'клавиатура', {
//             reply_markup: {
//                 keyboard: [
//                     [{
//                         text: 'Отправить местополодение',
//                         request_location: true
//                     }],
//                     ['Ответить', 'Закрыть'],
//                     [{
//                         text: 'Отправить контакт',
//                         request_contact: true
//                     }]
//                 ],
//                 one_time_keyboard: true //закрыть клавиатуру после использования
//             }

//         });
//     }


 //передача ссылок
//     if (msg.text.toLowerCase() === "инлайн") {
//         bot.sendMessage(id, 'инлайн клавиатура', {
//             reply_markup: {
//                 inline_keyboard: [
//                     [{
//                             text: 'Google',
//                             url: 'https://www.google.com'
//                         }

//                     ],
//                     [{
//                             text: 'text',
//                             callback_data: 'text1'

//                         },
//                         {
//                             text: 'text2',
//                             callback_data: 'text2'
//                         }

//                     ],

//                 ]
//             }

//         });
//     }

//     bot.sendMessage(id, msg)
//         .then(() => {
//             console.log('Message has been send')
//         }).catch((error) => {
//             console.error(error);
//         });
// })

//пересылка, ответ на сообщение
// bot.on('callback_query', query => {
//     bot.answerCallbackQuery(query.id, `${query.data}`);
//     const {
//         chat,
//         message_id,
//         text
//     } = query.message;

//     switch (query.data) {
//         case 'forward':
          //куда, откуда, что - параметры функции ниже
//             bot.forwardMessage(chat.id, chat.id, message_id)
//             break

//         case 'reply':
//             bot.sendMessage(chat.id, 'Отвечаем на сообщение', {
//                 reply_to_message_id: message_id
//             })
//             break
//         case 'edit':
//             bot.editMessageText(`${text} (редактируем)`, {
//                 chat_id: chat.id,
//                 message_id: message_id,
//                 reply_markup: {inline_keyboard}
//             })
//             break
//         case 'delete':
//             bot.deleteMessage(chat.id, message_id)
//             break
//     }

//     bot.answerCallbackQuery({
//         callback_query_id: query.id
//     })
// })

// function debug(obj = {}) {
//     return JSON.stringify(obj, null, 4)
// }