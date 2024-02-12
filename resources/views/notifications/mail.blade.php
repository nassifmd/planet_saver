<div>
    <h2>New Reply Notification</h2>
    <p>Hello {{ $notifiable->name }},</p>
    <p>A new reply has been posted to your thread:</p>
    <p>Title: {{ $notification->data['thread_title'] }}</p>
    <p>Content: {{ $notification->data['reply_content'] }}</p>
    <p>Click <a href="{{ $notification->data['thread_url'] }}">here</a> to view the thread.</p>
</div>
