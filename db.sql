CREATE TABLE messages(
    id BIGINT ,
    sender BIGINT,
    receiver BIGINT,
    message TEXT,
    files TEXT,
    date DATETIME,
    seen INT,
    received INT,
    deleted_sender TINYINT 1,
    deleted_receiver TINYINT 1
)