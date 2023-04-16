@include('admin.admin_body')
<div class="content">
    <div class="main-outer">
        @foreach($user_contacts as $contact)
        <div class="contact-details-inner" style="width: 1000px; height: 300px; border: 2px solid black; margin: 50px; display: flex; align-items: center; justify-content: center">
            <div class="user-details" style="width: 400px; height: 100%; padding: 10px">
                <h3 style="font-size: 30px;">User Contacts</h3>
                <div class="user-details-inner" style="margin: 30px 20px 0 20px">
                    <h2>Name</h2> <span>{{$contact->name}}</span>
                </div>
                <div class="user-details-inner" style="margin: 30px 20px 0 20px">
                    <h2>Email</h2><span><a href="mailto:{{$contact->email}}">{{$contact->email}}</a></span>
                </div>
                <div class="user-details-inner" style="margin: 30px 20px 0 20px">
                    <h2>Phone</h2><span><mark><a href="callto:{{$contact->phone}}">{{$contact->phone}}</a></mark></span>
                </div>
            </div>
            <div class="user-message" style="width: 600px; height: 100%;padding: 10px">
                <h3 style="font-size: 30px;">Message</h3>
                <div class="user-message-inner" style="margin: 30px 20px 0 20px;">
                    <h2>Message</h2><p style="text-align: justify">{{$contact->message}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

