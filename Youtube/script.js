const replyButtons = document.querySelectorAll('.view-replies');

replyButtons.forEach(button => {
  button.addEventListener('click', () => {
    const comment = button.closest('.comment');
    const replies = comment.querySelector('.replies');

    if (replies.style.display === 'none' || replies.style.display === '') {
      replies.style.display = 'block';
    } else {
      replies.style.display = 'none';
    }
  });
});