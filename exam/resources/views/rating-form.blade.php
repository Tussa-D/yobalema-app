<form action="{{ route('driver-ratings.store') }}" method="POST">
    @csrf
    <input type="hidden" name="chauffeur_id" value="{{ $chauffeur->id }}">
    <label for="note">Note:</label>
    <input type="number" id="note" name="note" min="1" max="5" required>
    <label for="commentaire">Commentaire:</label>
    <textarea id="commentaire" name="commentaire"></textarea>
    <button type="submit">Soumettre</button>
</form>
