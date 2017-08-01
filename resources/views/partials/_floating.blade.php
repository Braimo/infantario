<style>
  






form input, form textarea {
  
  border: 2px solid gray;
  background: none;
  position: relative;
  top: 0;
  left: 0;
  z-index: 1;
  padding: 8px 12px;
  outline: 0;
}

form input:valid, form textarea:valid {
  background: white;
}

form input:focus, form textarea:focus {
  border-color: p;
}

form input:focus + label{
  background: #2F4F4F;
  color: white;
  font-size: 70%;
  margin: auto;
  padding: 1px 6px;
  text-transform: uppercase;
}

form label {
  transition: background 0.2s, color 0.2s, top 0.2s, bottom 0.2s, right 0.2s, left 0.2s;
  position: absolute;
  color: white;
  padding: 7px 6px;
}
form textarea {
  display: block;
  resize: vertical;
}

form.go-bottom input, form.go-bottom textarea {
  padding: 12px 12px 12px 12px;
}
form.go-bottom label {
  top: 0;
  bottom: 0;
  left: 0;
  
}
form.go-bottom input:focus, form.go-bottom textarea:focus {
  padding: 4px 6px 20px 6px;
}
form.go-bottom input:focus + label, form.go-bottom textarea:focus + label {
  top: 100%;
  margin-top: -16px;
}


}

</style>