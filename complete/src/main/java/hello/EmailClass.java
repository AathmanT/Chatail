package hello;

public class EmailClass {
    public EmailClass(String to, String from, String subject, String date, String body) {
        this.to = to;
        this.from = from;
        this.subject = subject;
        this.date = date;
        this.body = body;
    }

    String to;
    String from;
    String subject;
    String date;
    String body;

}
