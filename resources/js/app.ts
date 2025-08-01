import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

window.Echo = new Echo({
                           broadcaster: 'pusher',
                           key: import.meta.env.VITE_PUSHER_APP_KEY,
                           cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
                           wsHost: import.meta.env.VITE_PUSHER_HOST,
                           wsPort: Number(import.meta.env.VITE_PUSHER_PORT),
                           forceTLS: import.meta.env.VITE_PUSHER_SCHEME === 'https',
                           disableStats: true,
                       });
