@csrf
<input type="text" name="subject" placeholder="Assunto..." value="{{$support->subject ?? old('subject')}}">
<textarea name="body" placeholder="Decrição..." cols="30" rows="5">{{$support->body ?? old('subject')}}</textarea>
<button type="submit">Enviar Duvida</button>